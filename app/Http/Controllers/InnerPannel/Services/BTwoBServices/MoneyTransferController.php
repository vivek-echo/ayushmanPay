<?php

namespace App\Http\Controllers\InnerPannel\Services\BTwoBServices;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use App\Mail\GetOtpMoneyTransfer;
use Illuminate\Support\Facades\Crypt;

class MoneyTransferController extends Controller
{
    public function index(Request $request)
    {

        return view("InnerPannel.Services.BtwoBServices.MoneyTransfer.MoneyTransfer");
        // $user = Auth::user();
        // $apiKey = config('constant.API_KEY');
        // $token = Controller::getToken();
        // // dd( $token );
        // $param['mobile'] =  $user->mobile;
        // $param['bank3_flag'] =  'NO';
        // $queryremitter =  Http::withHeaders([
        //     'accept' => 'application/json',
        //    //'Authorisedkey' => $apiKey,
        //     'Token' => $token
        // ])->withBody(json_encode($param), 'application/json')
        //     ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/remitter/queryremitter')->json();
        //     Log::channel('apiLog')->info('success',[
        //         'url'=> ''.config('constant.SERVICE_URL').'api/v1/service/dmt/remitter/queryremitter',
        //         'body'=>  $param,
        //         'response' => $queryremitter
        //     ]);
        // $viewVar['mobile'] = $user->mobile;
        // $viewVar['firstname'] = $user->firstName;
        // $viewVar['lastName'] = $user->lastName;
        // $viewVar['address'] = $user->address;
        // $viewVar['pincode'] = $user->pinCode;

        // if ($queryremitter['status'] == true) {
        //     $fetchParam['mobile'] = $user->mobile;
        //     $fetchBen =  Http::withHeaders([
        //         'accept' => 'application/json',
        //        //'Authorisedkey' => $apiKey,
        //         'Token' => $token
        //     ])->withBody(json_encode($fetchParam), 'application/json')
        //         ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/beneficiary/registerbeneficiary/fetchbeneficiary')->json();
        //         Log::channel('apiLog')->info('success',[
        //             'url'=> ''.config('constant.SERVICE_URL').'api/v1/service/dmt/beneficiary/registerbeneficiary/fetchbeneficiary',
        //             'body'=>  $fetchParam,
        //             'response' => $fetchBen
        //         ]);
        //     if ($fetchBen['status'] == true) {
        //         $viewVar['fetchbenficery'] = $fetchBen['data'];
        //     } else {
        //         $viewVar['fetchbenficery'] = [];
        //     }
        //     return view("InnerPannel.Services.BtwoBServices.MoneyTransfer.MoneyTransfer", $viewVar);
        // } else {
        //     $viewVar['stateresp'] = $queryremitter['stateresp'];
        //     $viewVar['message'] = $queryremitter['message'];
        //     $viewVar['bank3_flag'] = "yes";
        //     $viewVar['dob'] = $user->dateOfBirth;
        //     $state = strtoupper($user->state);
        //     $gstState = DB::table('gststate')->where('gstStateName', $state)->first()->gstStateId;
        //     $viewVar['gst_state'] = sprintf("%02d", $gstState);

        //     return view('InnerPannel.Services.BtwoBServices.MoneyTransfer.MoneyTransferRemiter', $viewVar);
        // }
    }


    public function checkRemitter()
    {
        $user = Auth::user();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $getData = request()->all();
        $param['mobile'] =  $getData['remiterCheckMobile'];
        $param['bank3_flag'] =  'NO';
        $queryremitter =   Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/remitter/queryremitter')->json();
        Log::channel('apiLog')->info('success', [
            'url' => ''.config('constant.SERVICE_URL').'api/v1/service/dmt/remitter/queryremitter',
            'body' =>  $param,
            'response' => $queryremitter
        ]);
        return response()->json([
            'api' => $queryremitter
        ]);
    }

    //for Bank List
    public function getBankList()
    {
        $bankList = DB::table('dmt-bank-list')->orderBy('BANKNAME', 'asc')->get();

        return response()->json([
            'data' => $bankList
        ]);
    }

    public function fetchMoneySendDetails()
    {
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $param['mobile'] =  $getData['remiterMobile'];
        $param['bank3_flag'] =  'NO';
        $query =  Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/remitter/queryremitter')->json();
            Log::channel('apiLog')->info('success',[
                'url'=> ''.config('constant.SERVICE_URL').'api/v1/service/dmt/remitter/queryremitter',
                'body'=>  $param,
                'response' => $query
            ]);
        return response()->json([
            'status' => $query['status'],
            'message' => $query['message'],
            'data' => $query['data']
        ]);
    }

    public function submitRemiterRegister()
    {
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();

        $param['mobile'] =  $getData['preMobile'];
        $param['firstname'] =  $getData['firstName'];
        $param['lastname'] =  $getData['lastName'];
        $param['address'] =  $getData['address'];
        $param['pincode'] =  $getData['pincode'];
        $param['stateresp'] =  $getData['stateresp'];
        $param['bank3_flag'] =  $getData['bank3_flag'];
        $param['dob'] =  $getData['dob'];
        $param['gst_state'] =  $getData['gst_state'];
        $param['otp'] =  $getData['otp'];
        $registerRemitter =   Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/remitter/registerremitter')->json();
        Log::channel('apiLog')->info('success', [
            'url' => ''.config('constant.SERVICE_URL').'api/v1/service/dmt/remitter/registerremitter',
            'body' =>  $param,
            'response' => $registerRemitter
        ]);
        return response()->json([
            'status' => $registerRemitter['status'],
            'message' => $registerRemitter['message']
        ]);
    }

    public function addBenfeiciry()
    {
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $param['mobile'] = $getData['remiterMobile'];
        $param['benename'] = $getData['acntHoldName'];
        $param['bankid'] = $getData['bankId'];
        $param['accno'] = $getData['accNumber'];
        $param['ifsccode'] = $getData['ifcscode'];
        $param['verified'] = $getData['verified'];
        $param['dob'] = $getData['dateOfBirth'];
        $param['address'] = $getData['address'];
        $param['pincode'] = $getData['pincode'];
        $registerBen =   Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/beneficiary/registerbeneficiary')->json();
        Log::channel('apiLog')->info('success', [
            'url' => ''.config('constant.SERVICE_URL').'api/v1/service/dmt/beneficiary/registerbeneficiary',
            'body' =>  $param,
            'response' => $registerBen
        ]);
        return response()->json([
            'status' => $registerBen['status'],
            'message' => $registerBen['message']
        ]);
    }

    public function deletebeneficiary()
    {
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $param['mobile'] = $getData['remiterMobile'];
        $param['bene_id'] = $getData['bene_id'];
        $deleteBen =   Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/beneficiary/registerbeneficiary/deletebeneficiary')->json();
        Log::channel('apiLog')->info('success', [
            'url' => ''.config('constant.SERVICE_URL').'api/v1/service/dmt/beneficiary/registerbeneficiary/deletebeneficiary',
            'body' =>  $param,
            'response' => $deleteBen
        ]);
        return response()->json([
            'status' => $deleteBen['status'],
            'message' => $deleteBen['message']
        ]);
    }

    public function fetchMoneyTransferDetails(Request $request)
    {
        $getData = request()->all();
        // $getData = request()->all();
        $draw =  $getData['draw'];
        $start =  $getData['start'];
        $rowPerPage =  $getData['length'];
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $param['mobile'] = $getData['mobile'];
        $query =   Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/beneficiary/registerbeneficiary/fetchbeneficiary')->json();
        Log::channel('apiLog')->info('success', [
            'url' => ''.config('constant.SERVICE_URL').'api/v1/service/dmt/beneficiary/registerbeneficiary/fetchbeneficiary',
            'body' =>  $param,
            'response' => $query
        ]);
        if ($query['status'] == true) {

            $totalFilter = count($query['data']);
            $arrData = $query['data'];
            $arrData = array_slice($arrData, $start, $rowPerPage);
            // foreach ( $arrData as $k => $val) {
            //     $res['sl'] = $k + 1;
            //     $res['bene_id'] = $val['bene_id'];
            //     $res['bankid'] = $val['bankid'];
            //     $res['bankname'] = $val['bankname'];
            //     $res['name'] = $val['name'];
            //     $res['accno'] = $val['accno'];
            //     $res['ifsc'] = $val['ifsc'];
            //     $res['verified'] = $val['verified'];
            // }
            // $arrData = $res;
        } else {

            $totalFilter = 0;
            $arrData = [];
        }
        return response()->json([
            'status' => $query['status'],
            'message' => $query['message'],
            'data' => $arrData,
            'recordsTotal' => $totalFilter,
            'recordsFiltered' => $totalFilter,
            'draw' => intval($draw)
        ]);
        // foreach($query['data'] as $k=> $val)
        // {
        //     $res['sl'] = $k+1;
        //     $res['bene_id']= $val->bene_id; 
        //     $res['bankid']= $val->bankid; 
        //     $res['bankname']= $val->bankname; 
        //     $res['name']= $val->name; 
        //     $res['accno']= $val->accno; 
        //     $res['ifsc']= $val->ifsc; 
        //     $res['verified']= $val->verified; 

        // }
        // return response()->json([
        //     'status' => $query['status'],
        //     'message' => $query['message'],
        //     'data' => $res
        // ]);
    }

    public function getOtpMoneyTansfer()
    {
        $user = Auth::user();
        $params['name'] = $user->firstName . " " .  $user->lastName;
        $params['email'] = $user->email;
        $params['otp'] = mt_rand(10000000, 99999999);
        $sendMail = $this->sendMailOtp($params);
        if (is_null($sendMail)) {
            return response()->json([
                'status' => true,
                'message' => "*Otp sent to your registred email.",
                'otpEnc' => Crypt::encryptString($params['otp'])
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => "Something went wrong. Please try again later."
            ]);
        }
    }

    public function sendMailOtp($data)
    {
        Mail::to($data['email'])->send(new GetOtpMoneyTransfer($data));
    }

    public function validateOtp()
    {
        $getData = request()->all();
        if (Crypt::decryptString($getData['encOtp']) == $getData['otp']) {
            $status = true;
        } else {
            $status = false;
        }
        return response()->json([
            'status' => $status
        ]);
    }

    public function sendMoney()
    {
        $getData = request()->all();
        $userId = Auth::user();
        $walletId = DB::table('user_wallet')->where('userId', $userId->id)->where('deletedFlag', 0)->first();
        if ($walletId) {
            if ($walletId->walletAmount < $getData['amount']) {
                return response()->json([
                    'status' =>  false,
                    'message' => "Insufficient fund in your account. Please topup your wallet before
                    initiating transaction ."
                ]);
            }
        }
        if (!$walletId) {
            return response()->json([
                'status' =>  false,
                'message' => "Insufficient fund in your account. Please topup your wallet before
                initiating transaction ."
            ]);
        }
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $params['mobile'] = $getData['mobile'];
        $params['referenceid'] =  mt_rand(10000000, 99999999);
        $params['pipe'] =  $getData['bankPipe'];
        $params['pincode'] = $userId->pinCode;
        $params['address'] = $getData['gstAddress'];
        $params['dob'] = date('d-m-Y', strtotime($userId->dateOfBirth));
        $params['gst_state'] = $getData['gstState'];
        $params['bene_id'] = $getData['beneId'];
        $params['txntype'] = $getData['taxType'];
        $params['amount'] = $getData['amount'];
        $user = $userId->id;

        $sendMoney =   Controller::getHeaders()->withBody(json_encode($params), 'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/transact/transact')->json();
        Log::channel('apiLog')->info('success', [
            'url' => ''.config('constant.SERVICE_URL').'api/v1/service/dmt/transact/transact',
            'body' =>  $params,
            'response' => $sendMoney
        ]);

        if ($sendMoney['status'] == true) {
            try {
                $trans = DB::beginTransaction();
                $insertAllRecord = DB::transaction(function () use ($sendMoney, $params, $user, $userId, $walletId) {

                    $rechargeId = DB::table('moneytransferservice')->insertGetId([
                        'userId' => $user,
                        'ackno' => $sendMoney['ackno'],
                        'utr' => $sendMoney['utr'],
                        'txn_status' => $sendMoney['txn_status'],
                        'benename' => $sendMoney['benename'],
                        'remarks' => $sendMoney['remarks'],
                        'message' => $sendMoney['message'],
                        'customercharge' => $sendMoney['customercharge'],
                        'gst' => $sendMoney['gst'],
                        'tds' => $sendMoney['tds'],
                        'netcommission' => $sendMoney['netcommission'],
                        'remitter' => $sendMoney['remitter'],
                        'account_number' => $sendMoney['account_number'],
                        'paysprint_share' => $sendMoney['paysprint_share'],
                        'txn_amount' => $sendMoney['txn_amount'],
                        'balance' => $sendMoney['balance'],
                        'createdOn' => now(),
                        'refid' => $params['referenceid'],
                        'bankPipe' => $params['pipe'],
                        'bene_id' => $params['bene_id'],
                        'txntype' => $params['txntype'],
                    ]);

                    $updatewalletLog = DB::table('user_wallet_log')->insert([
                        'wId' => $walletId->wId,
                        'serviceLogId' => $rechargeId,
                        'userId' => $userId->id,
                        'walletAmount' => $params['amount'],
                        'createdOn' => date('Y-m-d H:i:s'),
                        'servicType' => 3,
                        'transactionType' => 2,
                        'ackno' => $sendMoney['ackno'],
                        'riefId' => $params['referenceid'],
                        'message' => $sendMoney['remarks'],
                    ]);

                    DB::table('user_wallet')->where('deletedFlag', 0)->where('userId', $userId->id)->update([
                        'walletAmount' => $walletId->walletAmount - $params['amount'],
                        'updatedOn' => date('Y-m-d H:i:s')
                    ]);
                });
                if (is_null($insertAllRecord)) {
                    $status =  $sendMoney['status'];
                    $msg =  $sendMoney['message'];
                }
                DB::commit($trans);
            } catch (\Exception $t) {
                DB::rollBack($trans);
                Log::error("Error", [
                    'Controller' => 'MoneyTransferController',
                    'Method' => 'sendMoney',
                    'Error' => $t->getMessage(),
                ]);
                $status = false;
                $msg = "Something went wrong. please try again later";
            }
        } else {
            $status =  $sendMoney['status'];
            $msg =  $sendMoney['message'];
        }

        return response()->json([
            'status' =>  $status,
            'message' => $msg
        ]);
    }

    public function checkTransStatusfun()
    {
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $params['referenceid'] = $getData['referenceid'];
        $runApi =   Controller::getHeaders()->withBody(json_encode($params), 'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/transact/transact/querytransact')->json();
        Log::channel('apiLog')->info('success', [
            'url' => ''.config('constant.SERVICE_URL').'api/v1/service/dmt/transact/transact/querytransact',
            'body' =>  $params,
            'response' => $runApi
        ]);
        return response()->json([
            'api' => $runApi
        ]);
    }

    public function refundDMT()
    {
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();

        $params['referenceid'] = $getData['refundRefId'];
        $params['ackno'] = $getData['refundAckno'];
        // $params['isRefundOtp'] = $getData['isRefundOtp'];
        // $params['refundOtp'] = $getData['refundOtp'];

        if ($getData['isRefundOtp'] != 1) {
            $runApi =   Controller::getHeaders()->withBody(json_encode($params), 'application/json')
                ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/refund/refund/resendotp')->json();
            Log::channel('apiLog')->info('success', [
                'url' => ''.config('constant.SERVICE_URL').'api/v1/service/dmt/refund/refund/resendotp',
                'body' =>  $params,
                'response' => $runApi
            ]);
        } else {
            $params['otp'] = $getData['refundOtp'];
            $runApi =   Controller::getHeaders()->withBody(json_encode($params), 'application/json')
                ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/refund/refund/')->json();
            Log::channel('apiLog')->info('success', [
                'url' => ''.config('constant.SERVICE_URL').'api/v1/service/dmt/refund/refund/',
                'body' =>  $params,
                'response' => $runApi
            ]);
        }

        return response()->json([
            'api' => $runApi
        ]);
    }

    public function penneyDropMoneyTransfer(){
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $param['beneid'] = $getData['bene_id'];
        $param['mobile'] = $getData['remiterMobile'];

        $fetchbenDe =   Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/beneficiary/registerbeneficiary/fetchbeneficiarybybeneid')->json();
        Log::channel('apiLog')->info('success', [
            'url' => ''.config('constant.SERVICE_URL').'api/v1/service/dmt/beneficiary/registerbeneficiary/fetchbeneficiarybybeneid',
            'body' =>  $param,
            'response' => $fetchbenDe
        ]);
        // dd($fetchbenDe['data'][0]);
        if( $fetchbenDe['status'] == true){
            $paramPen['mobile']=$getData['remiterMobile'];
            $paramPen['accno']=$fetchbenDe['data'][0]['accno'];
            $paramPen['bankid']=$fetchbenDe['data'][0]['bankid'];
            $paramPen['benename']=$fetchbenDe['data'][0]['name'];
            $paramPen['referenceid']=mt_rand(10000000, 99999999);//
            $paramPen['bene_id']=$fetchbenDe['data'][0]['bene_id'];
            $penDrop=  Controller::getHeaders()->withBody(json_encode($paramPen), 'application/json')
                ->post(''.config('constant.SERVICE_URL').'api/v1/service/dmt/beneficiary/registerbeneficiary/benenameverify')->json();
            Log::channel('apiLog')->info('success', [
                'url' => ''.config('constant.SERVICE_URL').'api/v1/service/dmt/beneficiary/registerbeneficiary/benenameverify',
                'body' =>  $param,
                'response' => $penDrop
            ]);
            $api =  $penDrop;
        }else{
            $api = $fetchbenDe;
        }
       
      
        return response()->json([
            'api'=> $api
        ]);
    }
}
