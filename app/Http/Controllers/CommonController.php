<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller
{
    public function getState()
    {
        $getData = request()->all();

        $response = Http::get('https://api.worldpostallocations.com/pincode?postalcode=' . $getData['pinCode'] . '&countrycode=IN');
        return response()->json([
            'data' => $response['result'][0]
        ]);
    }

    public function getPrepaidOperatorList()
    {
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();

        $operatorList =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])
            ->post('https://paysprint.in/service-api/api/v1/service/recharge/recharge/getoperator')->json();
        return response()->json([
            'status' => $operatorList['status'],
            'message' => $operatorList['message'],
            'data' => $operatorList['data']
        ]);
    }

    public function getPerpaidOperatorPlan()
    {
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $param['circle'] = $getData['circle'];
        $param['op'] = $getData['op'];
        $plans =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($param), 'application/json')
            ->post('https://paysprint.in/service-api/api/v1/service/recharge/hlrapi/browseplan')->json();
        $mainmenu = array_keys($plans['info']);
        return response()->json([
            'status' => $plans['status'],
            'message' => $plans['message'],
            'data' => $mainmenu,
            'plans' => $plans['info']
        ]);
    }
    public function profileData()
    {
        $data = Auth::user();
        $walletAmount = 0;
        if ($data) {
            $wallet = DB::table('user_wallet')->where('userId', $data->id)->where('deletedFlag', 0)->first();
            if ($wallet) {
                $walletAmount = $wallet->walletAmount;
            }
        }
        return response()->json([
            'walletAmount' => $walletAmount
        ]);
    }

    public function getBillOperatorList()
    {
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $billOperator =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])
            ->post('https://paysprint.in/service-api/api/v1/service/bill-payment/bill/getoperator')->json();

        return response()->json([
            'status' => $billOperator['status'],
            'message' => $billOperator['message'],
            'data' => $billOperator['data']
        ]);
    }

    public function getGstStateList()
    {
        $bankList = DB::table('statelist')->orderBy('state', 'asc')->select('state as gstStateName', 'id as gstStateId')->get();
        return response()->json([
            'data' => $bankList
        ]);
    }
}
