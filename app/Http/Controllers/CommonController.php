<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CommonController extends Controller
{
    public function getState()
    {
        $getData = request()->all();

        $response = Http::get('https://api.worldpostallocations.com/pincode?postalcode=' . $getData['pinCode'] . '&countrycode=IN');
        return response()->json([
            'data' => $response['result'][0]
        ]);
       
    }
}
