<?php

namespace App\Http\Controllers\InnerPannel\Services\BTwoBServices;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class MoneyTransferController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $param['mobile'] =  $user->mobile;
        $param['bank3_flag'] =  'NO';
        $queryremitter =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($param), 'application/json')
            ->post('https://paysprint.in/service-api/api/v1/service/dmt/remitter/queryremitter')->json();

        if ($queryremitter['status'] == true) {

            return view("InnerPannel.Services.BtwoBServices.MoneyTransfer.MoneyTransfer");
        } else {
            $viewVar['stateresp'] = $queryremitter['stateresp'];
            $viewVar['message'] = $queryremitter['message'];
            $viewVar['mobile'] = $user->mobile;
            $viewVar['firstname'] = $user->firstName;
            $viewVar['lastName'] = $user->lastName;
            $viewVar['address'] = $user->address;
            $viewVar['pincode'] = $user->pinCode;
            $viewVar['bank3_flag'] = "yes";
            $viewVar['dob'] = $user->dateOfBirth;
            $state = strtoupper($user->state);
            $gstState = DB::table('gststate')->where('gstStateName', $state)->first()->gstStateId;
            $viewVar['gst_state'] = sprintf("%02d", $gstState);

            return view('InnerPannel.Services.BtwoBServices.MoneyTransfer.MoneyTransferRemiter', $viewVar);
        }
    }
    //for Bank List
    public function getBankList()
    {
        $bankList = DB::table('dmt-bank-list')->get();

        return response()->json([
            'data' => $bankList
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
        $registerRemitter =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($param), 'application/json')
            ->post('https://paysprint.in/service-api/api/v1/service/dmt/remitter/registerremitter')->json();
        return response()->json([
            'status' => $registerRemitter['status'],
            'message' => $registerRemitter['message']
        ]);
    }
}
