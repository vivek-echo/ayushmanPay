<?php

namespace App\Http\Controllers\InnerPannel\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $apiKey = config('constant.API_KEY');
        // $token = Controller::getToken();
        // $a = Auth::user();
        // $key = '9bcdc458b999fe5b'; //(provided by PAYSPRINT)
        // $iv =   'd289a7648f269f61';           // (provided by PAYSPRINT)
        // $datapost = request()->all();
        // $datapost['latitude'] = "22.44543";
        // $datapost['longitude'] = "77.434";
        // $datapost['mobilenumber'] = "9900000099";
        // $datapost['referenceno'] = "24252626234141432";
        // $datapost['ipaddress'] = "122.44.443.00";
        // $datapost['adhaarnumber'] = "695456558158";
        // $datapost['nationalbankidentification'] = "990320";
        // // $datapost['submerchantid'] = $a->userid;
        // $datapost['accessmodetype'] = "SITE";
      // $datapost['requestremarks'] = "requestremarks";
        // $datapost['pipe'] = "bank1";
        // $datapost['timestamp'] = "2020-01-12 13:00:12";
        // $datapost['transactiontype'] = "CW";
        // $datapost['amount'] = "100";
        // $datapost['submerchantid'] = $a->userId;
        // $datapost['is_iris'] = "Yes";
        

        // $cipher  =   openssl_encrypt(json_encode($datapost, true), 'AES-128-CBC', $key, $options = OPENSSL_RAW_DATA, $iv);
        // $body =       base64_encode($cipher);

        // $params['merchantcode'] = $a->userId;
        // $params['mobile'] = $a->mobile;
        // $params['is_new'] = 0;
        // $params['email'] = $a->email;
        // $params['firm'] = $a->shopName;
        // $params['callback'] = url('/dashboard');;
        // $payBill =  Http::withHeaders([
        //     'accept' => 'application/json',
        //     'Authorisedkey' => $apiKey,
        //     'Token' => $token
        // ])->withBody(json_encode($params), 'application/json')
        //     ->post('https://paysprint.in/service-api/api/v1/service/onboard/onboardnew/getonboardurl')->json();
        // dd($payBill);
        $viewVar['walet'] = 30;
        // dd(Controller::getToken());
        return view('InnerPannel.Dashboard.Dashboard', $viewVar);
    }
}
