<?php

namespace App\Http\Controllers\InnerPannel\Services\LegalServices;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\GetOtpMoneyTransfer;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\PDF;
use \PDF;

class PanCardNsldController extends Controller
{
    public function index(){
        // $user = Auth::user();
        // $apiKey = config('constant.API_KEY');
        // $token = Controller::getToken();
        // // dd($token);
        // // $params['merchantcid'] = (string)$user->userId;
        // $params['refid'] = (string)mt_rand(10000000, 99999999);
        // $params['redirect_url'] = url('/services/legalServices/PanCardNsld');
        // $params['title'] = 1;
        // $params['firstname'] = $user->firstName;
        // $params['middlename'] = "";
        // $params['lastname'] = $user->lastName;

        // // dd($params);
        // $generateUrl =  Http::withHeaders([
        //     'accept' => 'application/json',
        //     'Authorisedkey' => $apiKey,
        //     'Token' => $token
        // ])->withBody(json_encode($params), 'application/json')
        // ->post('https://paysprint.in/service-api/api/v1/service/pan/V2/generateurl')->json();
        // // dd($generateUrl);
        // $res['url'] = $generateUrl['data']['url'];
        // $res['encdata'] = $generateUrl['data']['encdata'];
        return view('InnerPannel.Services.LegalServices.NsdlPanCenterService');
    }

    public function PanCardNsldGen(){
        $getData = request()->all();
         $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $params['refid'] = (string)mt_rand(10000000, 99999999);
        $params['redirect_url'] = url('/services/legalServices/PanCardNsld');
        $params['title'] = $getData['title'];
        $params['firstname'] = $getData['firstName'];
        $params['middlename'] = "";
        $params['lastname'] = $getData['lastName'];
        $params['mode'] = $getData['mode'];
        $params['gender'] = $getData['gender'];
        $params['email'] = $getData['email'];
          $generateUrl =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($params), 'application/json')
        ->post('https://paysprint.in/service-api/api/v1/service/pan/V2/generateurl')->json();
        Log::channel('apiLog')->info('success',[
            'url'=> 'https://paysprint.in/service-api/api/v1/service/pan/V2/generateurl',
            'body'=>  $params,
            'response' => $generateUrl
        ]);
           
        return response()->json([
            'status' => $generateUrl['status'],
            'message' => $generateUrl['message'],
            'url' => $generateUrl['data']['url'],
            'encdata' => $generateUrl['data']['encdata']
        ]);
    }
}