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
}
