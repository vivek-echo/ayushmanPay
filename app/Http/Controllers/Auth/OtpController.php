<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\DB; 

class OtpController extends Controller
{
   
    public function index(Request $request){
        $getData = request()->all();
        if(!$getData){
            return "Not Authorized";
        }
        // dd( $getData);
        $resIns['userId'] =  $this->userId();
        $resIns['memberType'] =  $getData['memberType'];
        $resIns['email'] =  $getData['email'];
        $resIns['firstName'] =  $getData['firstName'];
        $resIns['password'] =  Hash::make($this->userId());
        $resIns['lastName'] =  $getData['lastName'];
        $resIns['mobile'] =  9999999999;
        $resIns['shopName'] =  $getData['shopName'];
        $resIns['dateOfBirth'] =  date('y-m-d',strtotime($getData['dateOfBirth']));
        $resIns['pinCode'] =  $getData['pinCode'];
        $resIns['stateId'] =  $getData['stateId'];
        $resIns['state'] =  $getData['state'];
        $resIns['cityId'] =  $getData['cityId'];
        $resIns['city'] =  $getData['city'];
        $resIns['address'] =  $getData['address'];
        $resIns['referalCode'] =  $getData['referralCode'];
        DB:: table('users')->insert( $resIns);
        return response()->json([
            'status'=> true
        ]);

    }

    public function validateOtp(){
        $getData = request()->all();
        $otp =Crypt::decryptString($getData['otpValidEnc']);     
        $enteredOtp = $getData['otpValid'];
        if($otp != $enteredOtp){
            $status = false;
        }else{
            $status = true;
        }
        return response()->json([
            'status'=> $status
        ]);
    }
    public function userId(){
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $userId = "ABP".substr(str_shuffle(str_repeat($pool, 3)), 0, 6);
        return $userId;
    }
    public function password(){
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $userId = substr(str_shuffle(str_repeat($pool, 5)), 0, 8);
        return $userId;
    }
}