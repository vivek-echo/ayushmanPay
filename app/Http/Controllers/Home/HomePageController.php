<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\LoginOtp;
use App\Providers\RouteServiceProvider;

class HomePageController extends Controller
{
    public function index()
    {
       
        return view('Home.HomePage');
    }


    // CHECKING EXISTING USER
    public function checkExistingUser()
    {
        $encOtp = '';
       $getData = request()-> all();
    //    dd($getData);
       $checkUser = DB::table('users')->where('email','=',$getData['email'])->first();
       if(!$checkUser){
          $status = false;
          $mssg = "User doesn't exist";
       }
       else{
            if(Hash::check($getData['pswd'] , $checkUser->password)){
                $resArry= [];
                $otp = mt_rand(100000, 999999);
                $res['otp'] = $otp;
                $res['email'] = $checkUser->email;
                $res['name'] = $checkUser->firstName;
                $encOtp =  Crypt::encryptString($otp);
                array_push($resArry,$res);

                $this->sendMailOtp($resArry);
                $status = true;
                $mssg = "User exist";
            }else{
                $status = false;
                $mssg = "Incorrect Password.";
            }
          
       }

    //    dd($status . "---".$mssg);
       return response()->json([  //for sending data from controller to AJAX
        'status' => $status,
        'message'=>$mssg,
        'encOtp'=> $encOtp
       ]);
    }


    public function checkUserTypedAndEncryptedOTP()
    {
       $getData = request()-> all();
    //    dd($getData);
       if($getData['otpValid'] !=  Crypt::decryptString($getData['encOtp'])){
          $status = false;
          $mssg = "Invalid OTP";
       }
       else{
           $status = true;
           $mssg = "Valid OTP";
       }

    //    dd($status . "---".$mssg);
       return response()->json([  //for sending data from controller to AJAX
        'status' => $status,
        'message'=>$mssg,
       ]);
    }

    public function sendMailOtp($data){
        $data = $data[0];
        Mail::to( $data['email'])->send(new LoginOtp($data ));
    }

   public function loginAction(){
      $getData = request()->all();
      if (Auth::attempt(['email' => $getData['email'], 'password' => $getData['pswd']])) {
        $status = true;
      }else{
         $status = false;
      }

      return response()->json([  //for sending data from controller to AJAX
         'status' => $status,
        ]);
    }
}
