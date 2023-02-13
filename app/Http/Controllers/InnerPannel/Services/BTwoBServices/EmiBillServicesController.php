<?php

namespace App\Http\Controllers\InnerPannel\Services\BTwoBServices;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class EmiBillServicesController extends Controller
{
    public function index()
    {
        return view("InnerPannel.Services.BtwoBServices.EmiBillService");
    }

    public function fetchEmiBill(){
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
            ->post(''.config('constant.SERVICE_URL').'bill-payment/bill/fetchbill')->json();
            // dd($fetchBill);
        return response()->json([
            'status' => $fetchBill['status'],
            'message' => $fetchBill['message'],
            'data' => $fetchBill['bill_fetch']
        ]);
    }

    public function payEmiBill(){
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
            ->post(''.config('constant.SERVICE_URL').'bill-payment/bill/paybill')->json();
            dd( $payBill);
          
    }
}