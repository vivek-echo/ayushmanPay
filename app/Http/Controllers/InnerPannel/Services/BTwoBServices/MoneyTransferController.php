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
        $viewVar['mobile'] = $user->mobile;
        $viewVar['firstname'] = $user->firstName;
        $viewVar['lastName'] = $user->lastName;
        $viewVar['address'] = $user->address;
        $viewVar['pincode'] = $user->pinCode;

        if ($queryremitter['status'] == true) {
            $fetchParam['mobile'] = $user->mobile;
            $fetchBen =  Http::withHeaders([
                'accept' => 'application/json',
                'Authorisedkey' => $apiKey,
                'Token' => $token
            ])->withBody(json_encode($fetchParam), 'application/json')
                ->post('https://paysprint.in/service-api/api/v1/service/dmt/beneficiary/registerbeneficiary/fetchbeneficiary')->json();
                if($fetchBen['status'] == true){
                    $viewVar['fetchbenficery'] = $fetchBen['data'];
                }else{
                    $viewVar['fetchbenficery'] = [];
                }
            return view("InnerPannel.Services.BtwoBServices.MoneyTransfer.MoneyTransfer",$viewVar);
        } else {
            $viewVar['stateresp'] = $queryremitter['stateresp'];
            $viewVar['message'] = $queryremitter['message'];
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
        $bankList = DB::table('dmt-bank-list')->orderBy('BANKNAME','asc')->get();

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

    public function addBenfeiciry(){
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
        $registerBen =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($param), 'application/json')
        ->post('https://paysprint.in/service-api/api/v1/service/dmt/beneficiary/registerbeneficiary')->json();
        return response()->json([
            'status' => $registerBen['status'],
            'message' => $registerBen['message']
        ]);
    }

    public function deletebeneficiary(){
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $param['mobile'] = $getData['remiterMobile'];
        $param['bene_id'] = $getData['bene_id'];
        $deleteBen =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($param), 'application/json')
        ->post('https://paysprint.in/service-api/api/v1/service/dmt/beneficiary/registerbeneficiary/deletebeneficiary')->json();
        return response()->json([
            'status' => $deleteBen['status'],
            'message' => $deleteBen['message']
        ]);
    }

    public function fetchMoneyTransferDetails(){
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $param['mobile'] =  $getData['remiterMobile'] ;
        $param['bank3_flag'] =  'NO';
        $query =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($param), 'application/json')
            ->post('https://paysprint.in/service-api/api/v1/service/dmt/remitter/queryremitter')->json();
            return response()->json([
                'status' => $query['status'],
                'message' => $query['message'],
                'data' => $query['data']
            ]);
    }
}
