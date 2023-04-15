<?php

namespace App\Http\Controllers\InnerPannel\Services\BTwoBServices;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\GetOtpMoneyTransfer;
use Illuminate\Support\Facades\Crypt;

class PanCardUtiController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $params['merchantcid'] = (string)$user->userId;
        $params['refid'] = (string)mt_rand(10000000, 99999999);
        $params['redirect_url'] = url('/services/b2bServices/PanCardUti');
        // dd($params);
        $generateUrl =  Controller::getHeaders()->withBody(json_encode($params), 'application/json')
        ->post(''.config('constant.SERVICE_URL').'api/v1/service/pan/generateurl')->json();
        Log::channel('apiLog')->info('success',[
            'url'=> ''.config('constant.SERVICE_URL').'api/v1/service/pan/generateurl',
            'body'=>  $params,
            'response' => $generateUrl
        ]);
        // dd($generateUrl);
        $res['url'] = $generateUrl['data']['url'];
        $res['encdata'] = $generateUrl['data']['encdata'];
        return view('InnerPannel.Services.BtwoBServices.PanCardUTIService',$res);
    }
}