<?php

namespace App\Http\Controllers\InnerPannel\Services\BTwoBServices;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class MobileRechargeServicesController extends Controller
{

    public function index()
    {
        return view("InnerPannel.Services.BtwoBServices.MobileRechargeService");
    }

    public function submitRecharge()
    {
        $getData = request()->all();
        $userId = Auth::user()->id;
        $walletId = DB::table('user_wallet')->where('userId', $userId)->where('deletedFlag', 0)->first();
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
        $param['operator'] = $getData['operator'];
        $param['canumber'] = $getData['canumber'];
        $param['amount'] = $getData['amount'];
        $param['referenceid'] = mt_rand(10000000, 99999999);
        $recharge =  Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/recharge/recharge/dorecharge')->json();
            Log::channel('apiLog')->info('success',[
                'url'=> ''.config('constant.SERVICE_URL').'api/v1/service/recharge/recharge/dorecharge',
                'body'=>  $param,
                'response' => $recharge
            ]);

        if ($recharge['status'] == true) {
            try {
                $trans = DB::beginTransaction();
                $insertAllRecord = DB::transaction(function () use ($recharge, $param, $getData, $userId, $walletId) {

                    $rechargeId = DB::table('mobilerechargeservice')->insertGetId([
                        'rechargeType' => 1,
                        'userId' => $userId,
                        'rechargeAmount' => $param['amount'],
                        'refid' => $recharge['refid'],
                        'ackno' => $recharge['ackno'],
                        'operatorid' => $recharge['operatorid'],
                        'operatorName' => $getData['perpaidOperatorName'],
                        'message' => $recharge['message'],
                        'createdOn' => date('Y-m-d H:i:s')
                    ]);

                    $updatewalletLog = DB::table('user_wallet_log')->insert([
                        'wId' => $walletId->wId,
                        'serviceLogId' => $rechargeId,
                        'userId' => $userId,
                        'walletAmount' => $param['amount'],
                        'createdOn' => date('Y-m-d H:i:s'),
                        'servicType' => 2,
                        'transactionType' => 2,
                        'ackno' => $recharge['ackno'],
                        'riefId' => $recharge['refid'],
                        'message' => $recharge['message'],
                    ]);

                    DB::table('user_wallet')->where('deletedFlag', 0)->where('userId', $userId)->update([
                        'walletAmount' => $walletId->walletAmount - $param['amount'],
                        'updatedOn' => date('Y-m-d H:i:s')
                    ]);
                });
                if (is_null($insertAllRecord)) {
                    $status =  $recharge['status'];
                    $msg =  $recharge['message'];
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

            return response()->json([
                'status' =>  $status,
                'message' => $msg
            ]);
        }
    }
}
