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

class RCController extends Controller
{
    public function index()
    {
        
        return view('InnerPannel.Services.LegalServices.RCService');
    }

    public function fetchRC(){
        $user = Auth::user();
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $params['refid'] = mt_rand(10000000, 99999999);
        $params['rc_number'] = $getData['rcno'];
        $generateUrl =   Controller::getHeaders()->withBody(json_encode($params), 'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/verification/rc/check')->json();
            Log::channel('apiLog')->info('success',[
                'url'=> ''.config('constant.SERVICE_URL').'api/v1/service/verification/rc/check',
                'body'=>  $params,
                'response' => $generateUrl
            ]);
        return response()->json([
            'status'=>$generateUrl['status'],
            'data'=>$generateUrl['data']
        ]);
    }
}