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
            ->post('https://paysprint.in/service-api/api/v1/service/fastag/Fastag/operatorsList')->json();
        return response()->json([
            'status' => $operatorList['status'],
            'message' => $operatorList['message'],
            'data' => $operatorList['data']
        ]);
    }
    public function fetchBill(){
        
    }
}
