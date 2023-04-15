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

class VoterController extends Controller
{
    public function index()
    { 
        return view('InnerPannel.Services.LegalServices.VoterIdCard');
    }

    public function fetchVoter(){
        $user = Auth::user();
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $params['refid'] = mt_rand(10000000, 99999999);
        $params['voterid'] = $getData['voterid'];
        $generateUrl =   Controller::getHeaders()->withBody(json_encode($params), 'application/json')
            ->post(''.config('constant.SERVICE_URL').'api/v1/service/verification/Votercard/validate')->json();
            Log::channel('apiLog')->info('success',[
                'url'=> ''.config('constant.SERVICE_URL').'api/v1/service/verification/Votercard/validate',
                'body'=>  $params,
                'response' => $generateUrl
            ]);
        return response()->json([
            'status'=>$generateUrl['status'],
            'data'=>$generateUrl['data']
        ]); 
    }
}