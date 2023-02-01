<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CommonController extends Controller
{
    public function getState(){
        $getData = request()->all();
      
        $response = Http::get('https://api.worldpostallocations.com/pincode?postalcode='.$getData['pinCode'].'&countrycode=IN');
        return response()->json([
            'data'=>$response['result'][0]
        ]);
        // if($response['status'] != false)
        // {

        //     echo json_encode($response['result'][0]['state']);
        // }else{
        //     echo json_encode(array('status'=>true,'result'=>  [])); 
        // }
    }
}