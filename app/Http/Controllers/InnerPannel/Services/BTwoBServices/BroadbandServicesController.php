<?php

namespace App\Http\Controllers\InnerPannel\Services\BTwoBServices;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class BroadbandServicesController extends Controller
{
    public function index()
    {
        return view("InnerPannel.Services.BtwoBServices.BroadbandService");
    }

    public function fetchBroadbandBill(){
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $params['operator'] = $getData['operator'];
        $params['canumber'] = $getData['canumber'];
        $fetchBill =  Controller::getHeaders()->withBody(json_encode($params),'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/bill-payment/bill/fetchbill')->json();
            Log::channel('apiLog')->info('success',[
                'url'=> config('constant.SERVICE_URL')."api/v1/service/bill-payment/bill/fetchbill",
                'body'=>  $params,
                'response' => $fetchBill
            ]);
            // dd($fetchBill);
        return response()->json([
            'status' => $fetchBill['status'],
            'message' => $fetchBill['message'],
            'data' => $fetchBill['bill_fetch']
        ]);
    }

    public function payBroadbandBill(){
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
        $payBill =  Controller::getHeaders()->withBody(json_encode($params),'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/bill-payment/bill/paybill')->json();
            Log::channel('apiLog')->info('success',[
                'url'=> config('constant.SERVICE_URL')."api/v1/service/bill-payment/bill/paybill",
                'body'=>  $params,
                'response' => $payBill
            ]);
            if($payBill['status'] == true){
                try{
                    $trans = DB::beginTransaction();
                    $insertAllRecord = DB::transaction(function () use ($payBill,$params,$getData,$userId,$walletId ) {
                        
                        $rechargeId = DB::table('brodbandservices')->insertGetId([
                            'operatoridRes'=>$payBill['operatorid'],
                            'userId' =>$userId,
                            'rechargeAmount'=>  $params['amount'],
                            'operatorId'=>  $params['operator'] ,
                            'operatorName'=>  $getData['operatorName'] ,
                            'caNumber'=>  $params['canumber'] ,
                            'ackno'=> $payBill['ackno'],
                            'message'=> $payBill['message'],
                            'createdOn'=>date('Y-m-d H:i:s'),
                            'refid'=>  $payBill['refid'] ,
                        ]);
                        
                        $updatewalletLog = DB::table('user_wallet_log')->insert([
                            'wId' => $walletId->wId,
                            'serviceLogId'=> $rechargeId ,
                            'userId'=> $userId,
                            'walletAmount'=> $params['amount'] ,
                            'createdOn'=>date('Y-m-d H:i:s'),
                            'servicType'=>7,
                            'transactionType'=>2,
                            'ackno' => $payBill['ackno'],
                            'riefId' => $payBill['refid'],
                            'message' => $payBill['message'],
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
                        'Controller' => 'EmiBillServicesController',
                        'Method' => 'payEmiBill',
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
