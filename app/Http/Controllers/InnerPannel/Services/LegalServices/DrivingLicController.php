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

class DrivingLicController extends Controller
{
    public function index()
    {
        return view('InnerPannel.Services.LegalServices.DrivingLicenceService');
    }

    public function fetchDrivingLic()
    {
        $user = Auth::user();
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $params['refid'] = mt_rand(10000000, 99999999);
        $params['license_number'] = $getData['dlno'];
        $params['dob'] = date('Y-m-d', strtotime($getData['dob']));
        $generateUrl =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($params), 'application/json')
            ->post('https://paysprint.in/service-api/api/v1/service/verification/drivinglicense/validate')->json();
        $image = $generateUrl['data']['profile_image'];
        $imageName =  $user->id."/".$params['refid'].".png";
        Storage::disk('public')->put($imageName, base64_decode($image));
        $imageSrc = "DrivingLic/".$imageName;
        return response()->json([
            'image'=>$imageSrc
        ]);
    }

    public function downloadDrivingLic(){
        $user = Auth::user();
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $params['refid'] = mt_rand(10000000, 99999999);
        $params['license_number'] = $getData['pdfDl'];
        $params['dob'] = date('Y-m-d', strtotime($getData['pdfDob']));
        $generateUrl =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($params), 'application/json')
            ->post('https://paysprint.in/service-api/api/v1/service/verification/drivinglicense/validate')->json();
        $image = $generateUrl['data']['profile_image'];
        $imageName =  $user->id."/".$params['refid'].".png";
        Storage::disk('public')->put($imageName, base64_decode($image));
        $imageSrc ="DrivingLic/".$imageName;
        $res['data'] = $generateUrl['data'];
        $res['imageSrc'] = $imageSrc;
        $pdf = \PDF::loadView('PDF.DrivingLic',$res);
        return $pdf->download('teknowize.pdf');
    }
}
