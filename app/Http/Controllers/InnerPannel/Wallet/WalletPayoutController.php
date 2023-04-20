<?php

namespace App\Http\Controllers\InnerPannel\Wallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Exception;

class WalletPayoutController extends Controller
{
    public function index(Request $req)
    {

        $user = Auth::user();
        $dataList = [];
        $dataListCount = 0;
        $msg = "";
        $status = "";
        $getData = request()->all();
        $param['merchantid'] = $user->userId;
        $fetchbenDe =   Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post('' . config('constant.SERVICE_URL') . 'api/v1/service/payout/payout/list')->json();
        if ($fetchbenDe['status'] == true) {
            $dataList = $fetchbenDe['data'];
        } else {
            $msg = $fetchbenDe['message'];
        }
        $view['dataList'] = $dataList;
        $dataListCount = count($dataList);
        $view['dataListCount'] =  $dataListCount;
        $msg = $fetchbenDe['message'];
        $status = $fetchbenDe['status'];
        if ($getData) {

            if ($req->file('uploadPassbook')) {
                $req->file('uploadPassbook')->move(public_path('payout/'), $req->file('uploadPassbook')->getClientOriginalName());
                $uploadPassbookimage = 'payout/' . $req->file('uploadPassbook')->getClientOriginalName();
            }


            if ($req->file('uploadPan')) {
                $req->file('uploadPan')->move(public_path('payout/'), $req->file('uploadPan')->getClientOriginalName());
                $uploadPanimage = 'payout/' . $req->file('uploadPan')->getClientOriginalName();
            }

            if ($req->file('uploadAadhaarFront')) {

                $req->file('uploadAadhaarFront')->move(public_path('payout/'), $req->file('uploadAadhaarFront')->getClientOriginalName());
                $uploadAadhaarFrontimage = 'payout//' . $req->file('uploadAadhaarFront')->getClientOriginalName();
            }

            if ($req->file('uploadAadhaarBack')) {

                $req->file('uploadAadhaarBack')->move(public_path('payout/'), $req->file('uploadAadhaarBack')->getClientOriginalName());
                $uploadAadhaarBackimage = 'payout/' . $req->file('uploadAadhaarBack')->getClientOriginalName();
            }

            if ($getData['docTypeFileUpload'] == 'PAN') {
                $body = [
                    "doctype"  => $getData['docTypeFileUpload'],
                    "passbook" => new \CURLFile(realpath($uploadPassbookimage)),
                    "panimage" => new \CURLFile(realpath($uploadPanimage)),
                    "bene_id"  => $getData['beneidFileUpload'],
                ];
            } else if ($getData['docTypeFileUpload'] == 'AADHAAR') {
                $body = [
                    "doctype"     => $getData['docTypeFileUpload'],
                    "passbook"    => new \CURLFile(realpath($uploadPassbookimage)),
                    "front_image" => new \CURLFile(realpath($uploadAadhaarFrontimage)),
                    "back_image"  => new \CURLFile(realpath($uploadAadhaarBackimage)),
                    "bene_id"     => $getData['beneidFileUpload'],
                ];
            }

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://paysprint.in/service-api/api/v1/service/payout/payout/uploaddocument',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $body,
                CURLOPT_HTTPHEADER => array(
                    'Token: ' . $this->getToken() . ' ',
                    'Authorisedkey:' . config('constant.API_KEY') . '',
                ),
            ));

            $response = curl_exec($curl);
            $response = json_decode($response);
            $msg = $response->message;
            $status = $response->status;
        }


        $view['status'] = $status;
        $view['message'] = $msg;

        return view('InnerPannel.WalletSection.WalletPayout', $view);
    }

    public function addAccountPayout()
    {

        $getData = request()->all();
        $user = Auth::user();
        $param['bankid'] =  $getData['bankid'];
        $param['merchant_code'] = $user->userId;
        $param['account'] = $getData['account'];
        $param['ifsc'] = $getData['ifsc'];
        $param['name'] = $getData['name'];
        $param['account_type'] = $getData['account_type'];
        $runApi = Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post('' . config('constant.SERVICE_URL') . 'api/v1/service/payout/payout/add')->json();
        return response()->json([
            'api' => $runApi
        ]);
    }



    public function accountStatusPayout()
    {
        $getData = request()->all();
        $user = Auth::user();
        $param['beneid'] =  $getData['beneid'];
        $param['merchantid'] = $user->userId;
        $runApi = Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post('' . config('constant.SERVICE_URL') . 'api/v1/service/payout/Payout/accountstatus')->json();
        return response()->json([
            'api' => $runApi
        ]);
    }

    public function sendMoneyWalletPayout()
    {
        $getData = request()->all();
        $user = Auth::user();
        $param['bene_id'] =  $getData['bene_id'];
        $param['amount'] =  $getData['amount'];
        $param['mode'] =  $getData['mode'];
        $param['refid'] = mt_rand(10000000, 99999999);
        $walletUser = $user->id;
        $runApi = Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post('' . config('constant.SERVICE_URL') . 'api/v1/service/payout/payout/dotransaction')->json();
        if($runApi['status'] == true){
            $checkWallet = DB::table('user_wallet')->where('userId', $walletUser)->select('wId', 'walletAmount', 'userId')->where('deletedFlag', 0)->first();
            if ($checkWallet) {
                $insertAllRecord = DB::transaction(function () use ($checkWallet,$param,$runApi) {
                    DB::table('user_wallet')->where('wId', $checkWallet->wId)->where('deletedFlag', 0)->update([
                        'walletAmount' => $checkWallet->walletAmount -  $param['amount'],
                        'updatedOn' => date('y-m-d H:i:s'),
                    ]);
                    DB::table('user_wallet_log')->insert([
                        'wId' =>  $checkWallet->wId,
                        'serviceLogId' =>  0,
                        'transactionType' =>  2,
                        'servicType' =>  9,
                        'userId' =>  $checkWallet->userId,
                        'walletAmount' => $param['amount'],
                        'createdOn' => date('y-m-d H:i:s'),
                        'ackno' => $runApi['ackno'],
                        'riefId'=>$param['refid'],
                        'message'=>$runApi['message']
                    ]);
                });
            } 
        }
        return response()->json([
            'api' => $runApi
        ]);
    }
}
