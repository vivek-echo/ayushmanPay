<?php

namespace App\Http\Controllers\InnerPannel\Services\BTwoBServices;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class FastTagServicesController extends Controller
{
    public function index()
    {
        return view("InnerPannel.Services.BtwoBServices.FastTagService");
    }
    public function getFastTagOperatorList()
    {

        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $operatorList =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])
            ->post(''.config('constant.SERVICE_URL').'fastag/Fastag/operatorsList')->json();
        return response()->json([
            'status' => $operatorList['status'],
            'message' => $operatorList['message'],
            'data' => $operatorList['data']
        ]);
    }
    public function fetchBill(){
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $params['operator'] = $getData['operator'];
        $params['canumber'] = $getData['canumber'];
        $fetchBill =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($params),'application/json')
            ->post(''.config('constant.SERVICE_URL').'fastag/Fastag/fetchConsumerDetails')->json();
        return response()->json([
            'status' => $fetchBill['status'],
            'message' => $fetchBill['message'],
            'data' => $fetchBill['bill_fetch']
        ]);
    }

    public function payBillFastTag(){
        $getData = request()->all();
        $userId = Auth ::user()->id;
        $walletId = DB::table('user_wallet')->where('userId',$userId)->where('deletedFlag',0)->first();
        if($walletId)
        {
            if($walletId->walletAmount < $getData['amount'] )
            {
                return response()->json([
                    'status' =>  false,
                    'message' => "Insufficient fund in your account. Please topup your wallet before
                    initiating transaction ."
                ]);
            }
        }
        if(!$walletId){
            return response()->json([
                'status' =>  false,
                'message' => "Insufficient fund in your account. Please topup your wallet before
                initiating transaction ."
            ]);
        }
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $params['operator'] = $getData['operator'];
        $params['canumber'] = $getData['canumber'];
        $params['amount'] = $getData['amount'];
        $params['referenceid'] = mt_rand(10000000, 99999999);
        $params['latitude'] = $getData['latitude'];
        $params['longitude'] = $getData['longitude'];
        $params['bill_fetch'] = $getData['billfetch'];
        $payBill =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($params),'application/json')
            ->post(''.config('constant.SERVICE_URL').'fastag/Fastag/recharge')->json();
          
        if($payBill['status'] == true){
            try{
                $trans = DB::beginTransaction();
                $insertAllRecord = DB::transaction(function () use ($payBill,$params,$getData,$userId,$walletId ) {
                    
                    $rechargeId = DB::table('fasttagservice')->insertGetId([
                        'userId' =>$userId,
                        'rechargeAmount'=>  $params['amount'],
                        'operatorid'=> $payBill['operatorid'],
                        'operatorName'=> $getData['billerName'],
                        'ackno'=> $payBill['ackno'],
                        'message'=> $payBill['message'],
                        'createdOn'=>date('Y-m-d H:i:s')
                    ]);
                    
                    $updatewalletLog = DB::table('user_wallet_log')->insert([
                        'wId' => $walletId->wId,
                        'serviceLogId'=> $rechargeId ,
                        'userId'=> $userId,
                        'walletAmount'=> $params['amount'] ,
                        'createdOn'=>date('Y-m-d H:i:s'),
                        'servicType'=>3,
                        'transactionType'=>2
                    ]);

                    DB::table('user_wallet')->where('deletedFlag',0)->where('userId',$userId)->update([
                        'walletAmount'=>$walletId->walletAmount - $params['amount'],
                        'updatedOn'=>date('Y-m-d H:i:s')
                    ]);
                });
                if (is_null($insertAllRecord)) {
                    $status =  $payBill['status'];
                    $msg =  $payBill['message'];
                }
                DB::commit($trans);
            } catch (\Exception $t) {
                DB::rollBack($trans);
                Log::error("Error", [
                    'Controller' => 'MobileRechargeServicesController',
                    'Method' => 'submitRecharge',
                    'Error' => $t->getMessage(),
                ]);
                $status = false;
                $msg = "Something went wrong. please try again later";
            }
        }else{
            $status =  $payBill['status'];
            $msg =  $payBill['message'];
        }

        return response()->json([
            'status' =>  $status,
            'message' => $msg
        ]);
    }
}
