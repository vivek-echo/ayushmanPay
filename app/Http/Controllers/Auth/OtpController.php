<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Mail\SignUp;
use App\Mail\SignUpWelcome;

class OtpController extends Controller
{
    public function vialidateOtpPage()
    {
        $getData = request()->all();
        $mailData = [];
        $res['memberType'] = Crypt::encryptString($getData['memberType']);
        $res['firstName'] = Crypt::encryptString($getData['firstName']);
        $res['lastName'] = Crypt::encryptString($getData['lastName']);
        $res['email'] = Crypt::encryptString($getData['email']);
        $res['shopName'] = Crypt::encryptString($getData['shopName']);
        $res['dateOfBirth'] = Crypt::encryptString($getData['dateOfBirth']);
        $res['pinCode'] = Crypt::encryptString($getData['pinCode']);
        $res['state'] = Crypt::encryptString($getData['state']);
        $res['stateId'] = Crypt::encryptString($getData['stateId']);
        $res['city'] = Crypt::encryptString($getData['city']);
        $res['cityId'] = Crypt::encryptString($getData['cityId']);
        $res['address'] = Crypt::encryptString($getData['address']);
        $res['referralCode'] = Crypt::encryptString($getData['referralCode']);
        $res['otp'] = mt_rand(100000, 999999);
        $resMAil = $res['otp'];
        $res['otpENc'] = Crypt::encryptString($res['otp']);
        array_push($getData,['otp'=>$resMAil]);
        // dd($getData[0]['otp']);
        $this->sendMailOtp($getData);
        return response()->json([
            'status' => true,
            'data' => $res
        ]);
    }
    public function viewOtpPage()
    {
        $getData = request()->all();
      
        $res['memberType'] = $getData['memberType'];
        $res['firstName'] = $getData['firstName'];
        $res['lastName'] = $getData['lastName'];
        $res['email'] = $getData['email'];
        $res['shopName'] = $getData['shopName'];
        $res['dateOfBirth'] = $getData['dateOfBirth'];
        $res['pinCode'] = $getData['pinCode'];
        $res['state'] = $getData['state'];
        $res['stateId'] = $getData['stateId'];
        $res['city'] = $getData['city'];
        $res['cityId'] = $getData['cityId'];
        $res['address'] = $getData['address'];
        $res['referralCode'] = $getData['referralCode'];
        $res['otp'] = $getData['otp'];
        $res['otpENc'] = $getData['otpENc'];
        return view('Auth.Otp', $res);
    }

    public function index(Request $request)
    {
        $getData = request()->all();
        
        if (!$getData) {
            return "Not Authorized";
        }
       
        try {
            $trans = DB::beginTransaction();
            $resIns['userId'] =  $this->userId();
            $resIns['memberType'] =  Crypt::decryptString($getData['memberType']);
            $resIns['email'] =  Crypt::decryptString($getData['email']);
            $resIns['firstName'] =  Crypt::decryptString($getData['firstName']);
            $pass = $this->password();
            $resIns['password'] =  Hash::make($pass);
            $resIns['temp'] =  $pass ;
            $resIns['lastName'] =  Crypt::decryptString($getData['lastName']);
            $resIns['mobile'] =  9999999999;
            $resIns['shopName'] =  Crypt::decryptString($getData['shopName']);
            $dateOfBirth =  Crypt::decryptString($getData['dateOfBirth']);
            $resIns['dateOfBirth'] = date('y-m-d', strtotime( $dateOfBirth));
            $resIns['pinCode'] =  Crypt::decryptString($getData['pinCode']);
            $resIns['stateId'] =  Crypt::decryptString($getData['stateId']);
            $resIns['state'] =  Crypt::decryptString($getData['state']);
            $resIns['cityId'] =  Crypt::decryptString($getData['cityId']);
            $resIns['city'] =  Crypt::decryptString($getData['city']);
            $resIns['address'] =  Crypt::decryptString($getData['address']);
            $resIns['referalCode'] =  Crypt::decryptString($getData['referralCode']);
            $insertAllRecord = DB::transaction(function () use ($resIns) {
                DB::table('users')->insert($resIns);
            });
            if (is_null($insertAllRecord)) {
                $this->sendMailWecome($resIns);
                $status = true;
                $msg = "Account Created Successfully";
            }
            DB::commit($trans);
        } catch (\Exception $t) {
            DB::rollBack($trans);
            Log::error("Error", [
                'Controller' => 'index',
                'Method' => 'OtpController',
                'Error' => $t->getMessage(),
            ]);
            $status = false;
            $msg = "Something went wrong. please try again later";
        }

        return response()->json([
            'status' =>  $status,
            'message' => $msg
        ]);
    }

    public function validateOtp()
    {
        $getData = request()->all();
        $otp = Crypt::decryptString($getData['otpValidEnc']);
        $enteredOtp = $getData['otpValid'];
        if ($otp != $enteredOtp) {
            $status = false;
        } else {
            $status = true;
        }
        return response()->json([
            'status' => $status
        ]);
    }
    public function userId()
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $userId = "ABP" . substr(str_shuffle(str_repeat($pool, 3)), 0, 6);
        return $userId;
    }
    public function password()
    {
        $poolPass = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $pass = substr(str_shuffle(str_repeat($poolPass, 5)), 0, 8);
        return $pass;
    }

    public function sendMailOtp($data){
        Mail::to( $data['email'])->send(new SignUp($data ));
    }
    public function sendMailWecome($dataWel)
    {
        Mail::to( $dataWel['email'])->send(new SignUpWelcome($dataWel));
    }
}
