<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use DB;

class HomePageController extends Controller
{
    public function index()
    {
        
        // $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

        // // Create token payload as a JSON string
        // $payload = json_encode(['timestamp' => time(),'partnerId'=>"PS00223","reqid"=>121174312]);

        // // Encode Header to Base64Url String
        // $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

        // // Encode Payload to Base64Url String
        // $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

        // // Create Signature Hash
        // $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, config('constant.JWT_SECRET'), true);

        // // Encode Signature to Base64Url String
        // $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

        // // Create JWT
        // $jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

        // echo $jwt;
        return view('Home.HomePage');
    }
}
