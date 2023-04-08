<?php

namespace App\Http\Controllers\InnerPannel\Services\BTwoBServices;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class AepsController extends Controller
{


    public function index()
    {
        $msg = "";
        $status = "";
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $a = Auth::user();
        $viewVar['redirectUrl'] =  "";
        $viewVar['message'] = $msg;
        $viewVar['status'] = $status;
        $viewVar['transType'] = "";
        $viewVar['balance'] = "";
        $viewVar['dateTime'] = "";
        $viewVar['bankAcc'] = "";
        $viewVar['bankName'] = "";
        $viewVar['ministatement'] = [];
        if ($getData) {
            if ($getData['btnSearchSubmit'] == 1) {
                $key = '9bcdc458b999fe5b'; //(provided by PAYSPRINT)
                $iv =   'd289a7648f269f61';
                $datapost['latitude'] = $getData['lat'];
                $datapost['longitude'] = $getData['long'];
                $datapost['mobilenumber'] = $getData['cstmrMobNo'];
                $datapost['referenceno'] = mt_rand(10000000, 99999999);
                $datapost['ipaddress'] = $this->get_client_ip();
                $datapost['adhaarnumber'] = $getData['aadharNo'];
                $datapost['nationalbankidentification'] = $getData['bankName'];
                $datapost['data'] = $getData['txtPidData'];
                // $datapost['submerchantid'] = $a->userid;
                $datapost['accessmodetype'] = "SITE";
                $datapost['requestremarks'] = "requestremarks";
                $datapost['pipe'] = "bank1";
                $datapost['timestamp'] = now();
                $datapost['transactiontype'] = $getData['transType'];
                $datapost['amount'] = $getData['amount'];
                $datapost['submerchantid'] = $a->userId;
                $datapost['is_iris'] = "Yes";
                $cipher  =   openssl_encrypt(json_encode($datapost, true), 'AES-128-CBC', $key, $options = OPENSSL_RAW_DATA, $iv);
                $param['body'] =  base64_encode($cipher);

                $apiUrl = '';
                if ($getData['transType'] == "BE") {
                    $apiUrl = 'https://paysprint.in/service-api/api/v1/service/aeps/balanceenquiry/index';
                } else if ($getData['transType'] == "CW") {
                    $apiUrl = 'https://paysprint.in/service-api/api/v1/service/aeps/cashwithdraw/index';
                } else if ($getData['transType'] == "MS") {
                    $apiUrl =  'https://paysprint.in/service-api/api/v1/service/aeps/ministatement/index';
                }
                $runApi =  Http::withHeaders([
                    'accept' => 'application/json',
                    'Authorisedkey' => $apiKey,
                    'Token' => $token
                ])->withBody(json_encode($param), 'application/json')
                    ->post($apiUrl)->json();
                    Log::channel('apiLog')->info('success', [
                        'url' =>  $apiUrl,
                        'data'=>$datapost,
                        'body' =>   $param,
                        'response' => $runApi
                    ]);
                    
                if ($getData['transType'] == "BE") {
                    if ($runApi['status'] == false) {
                        $viewVar['transType'] = "BE";
                        $viewVar['status'] = $runApi['status'];
                        $viewVar['message'] = $runApi['message'];
                        $viewVar['balance'] = "";
                    } else {
                        $viewVar['transType'] = "BE";
                        $viewVar['status'] = $runApi['status'];
                        $viewVar['message'] = $runApi['message'];
                        $viewVar['balance'] = $runApi['balanceamount'];
                    }
                } else if ($getData['transType'] == "CW") {
                    if ($runApi['status'] == false) {
                        $viewVar['transType'] = "CW";
                        $viewVar['status'] = $runApi['status'];
                        $viewVar['message'] = $runApi['message'];
                        $viewVar['balance'] =  "";
                    } else {
                        $viewVar['transType'] = "CW";
                        $viewVar['status'] = $runApi['status'];
                        $viewVar['message'] = $runApi['message'];
                        $viewVar['balance'] = $runApi['amount'];
                    }
                } else if ($getData['transType'] == "MS") {
                    if ($runApi['status'] == false) {
                        $viewVar['transType'] = "MS";
                        $viewVar['status'] = $runApi['status'];
                        $viewVar['message'] = $runApi['message'];
                        $viewVar['balance'] =  "";
                    } else {
                        $viewVar['transType'] = "MS";
                        $viewVar['status'] = $runApi['status'];
                        $viewVar['message'] = $runApi['message'];
                        $viewVar['balance'] = $runApi['balanceamount'];
                        $viewVar['dateTime'] = $runApi['datetime'];
                        $viewVar['bankAcc'] = $runApi['bankrrn'];
                        $viewVar['bankName'] = $runApi['bankiin'];
                        $viewVar['ministatement'] = $runApi['ministatement'];
                    }
                }
            }
        }
        $params['merchantcode'] = $a->userId;
        $params['mobile'] = $a->mobile;
        $params['is_new'] = 0;
        $params['email'] = $a->email;
        $params['firm'] = $a->shopName;
        $params['callback'] = url('/aepsKycCallBack');
        $payBill =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($params), 'application/json')
            ->post('https://paysprint.in/service-api/api/v1/service/onboard/onboardnew/getonboardurl')->json();
            Log::channel('apiLog')->info('success', [
                'url' =>  "https://paysprint.in/service-api/api/v1/service/onboard/onboardnew/getonboardurl",
                'body' =>   $params,
                'response' => $payBill
            ]);
        if ($payBill) {
            $redirect = $payBill['redirecturl'];
        } else {
            $redirect = "";
        }
        $viewVar['redirectUrl'] =  $redirect;
       
       
        $viewVar['message'] = $viewVar['message'];
        $viewVar['status'] = $viewVar['status'];
        // dd($viewVar);
        // session()->flash('message', $msg);
        return view('InnerPannel/Services/BtwoBServices/AepsService', $viewVar);
    }

    public function aepsKycCallBack()
    {
        $getData = request()->all();
        $msg = "";
        $status = "";
        $decodeData = json_decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $getData['data'])[1]))));

        if ($decodeData->status == 1) {
            
            $updateKyc = DB::table('users')->where('userId', $decodeData->merchantcode)->where('deletedFlag', 0)->update([
                'kycStatus' => 1,
                'kycRiefId' => $decodeData->refno,
                'taxInId' => $decodeData->txnid,
                'statusbank2' => $decodeData->statusbank2
            ]);
            if ($updateKyc) {
                $msg = "KYC Done Successfully";
                $status = true;
            } else {
                $msg = "Something Went Wrong . Please try again later. ";
                $status = False;
            }
        }
        $viewVar['message']=$msg;
        $viewVar['status']=$status;
        $viewVar['btnSearchSubmit'] = 0;
        // session()->flash('message', $msg);
        // session()->flash('status', $status);

         return redirect()->route('aeps');
    }

    public function getBankNameList()
    {
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $runApi =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->post('https://paysprint.in/service-api/api/v1/service/aeps/banklist/index')->json();

        return response()->json([
            'data' => $runApi['banklist']['data'],
            'status' => $runApi['banklist']['status'],
        ]);
    }

    public function getBEAeps()
    {
        $key = '9bcdc458b999fe5b'; //(provided by PAYSPRINT)
        $iv =   'd289a7648f269f61';
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $a = Auth::user();
        $datapost['latitude'] = $getData['lat'];
        $datapost['longitude'] = $getData['long'];
        $datapost['mobilenumber'] = $getData['cstmrMobNo'];
        $datapost['referenceno'] = mt_rand(10000000, 99999999);
        $datapost['ipaddress'] = $this->get_client_ip();
        $datapost['adhaarnumber'] = $getData['aadharNo'];
        $datapost['nationalbankidentification'] = $getData['bankName'];
        $datapost['data'] = $getData['txtPidData'];
        // $datapost['submerchantid'] = $a->userid;
        $datapost['accessmodetype'] = "SITE";
        $datapost['requestremarks'] = "requestremarks";
        $datapost['pipe'] = "bank1";
        $datapost['timestamp'] = now();
        $datapost['transactiontype'] = $getData['transType'];
        $datapost['amount'] = $getData['amount'];
        $datapost['submerchantid'] = $a->userId;
        $datapost['is_iris'] = "Yes";
        $cipher  =   openssl_encrypt(json_encode($datapost, true), 'AES-128-CBC', $key, $options = OPENSSL_RAW_DATA, $iv);
        $param['body'] =       base64_encode($cipher);

        $apiUrl = '';
        if ($getData['transType'] == "BE") {
            $apiUrl = 'https://paysprint.in/service-api/api/v1/service/aeps/balanceenquiry/index';
        } else if ($getData['transType'] == "CW") {
            $apiUrl = 'https://paysprint.in/service-api/api/v1/service/aeps/cashwithdraw/index';
        } else if ($getData['transType'] == "MS") {
            $apiUrl =  'https://paysprint.in/service-api/api/v1/service/aeps/ministatement/index';
        }
        $runApi =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($param), 'application/json')
            ->post($apiUrl)->json();


        if ($getData['transType'] == "BE") {
            if ($runApi['status'] == false) {
                return response()->json([
                    'transType' => "BE",
                    'status' => $runApi['status'],
                    'message' => $runApi['message'],
                    'balance' => ""

                ]);
            } else {
                return response()->json([
                    'transType' => "BE",
                    'status' => $runApi['status'],
                    'message' => $runApi['message'],
                    'balance' => $runApi['balanceamount']
                ]);
            }
        } else if ($getData['transType'] == "CW") {
            if ($runApi['status'] == false) {
                return response()->json([
                    'transType' => "CW",
                    'status' => $runApi['status'],
                    'message' => $runApi['message'],
                    'balance' => ""

                ]);
            } else {
                return response()->json([
                    'transType' => "CW",
                    'status' => $runApi['status'],
                    'message' => $runApi['message'],
                    'balance' => $runApi['amount']
                ]);
            }
        } else if ($getData['transType'] == "MS") {
            if ($runApi['status'] == false) {
                return response()->json([
                    'transType' => "MS",
                    'status' => $runApi['status'],
                    'message' => $runApi['message'],
                    'balance' => ""

                ]);
            } else {
                return response()->json([
                    'transType' => "MS",
                    'status' => $runApi['status'],
                    'message' => $runApi['message'],
                    'balance' => $runApi['balanceamount'],
                    'dateTime' => $runApi['datetime'],
                    'bankAcc' => $runApi['bankrrn'],
                    'bankName' => $runApi['bankiin'],
                    'ministatement' => $runApi['ministatement']
                ]);
            }
        }
    }

    public function get_client_ip()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}
