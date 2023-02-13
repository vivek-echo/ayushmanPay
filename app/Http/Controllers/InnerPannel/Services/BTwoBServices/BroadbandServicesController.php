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
}
