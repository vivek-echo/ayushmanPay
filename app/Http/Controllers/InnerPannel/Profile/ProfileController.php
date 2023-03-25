<?php

namespace App\Http\Controllers\InnerPannel\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function profileUpdateIndex()
    {
        $msg = "";
        $status = "";
        $a = Auth::user();
        $profile = DB::table('users')->where('id', $a->id)->where('deletedFlag', 0)->first();
        $view['profile'] = $profile;
        $view['status'] =  $status;
        $view['msg'] = $msg;
        return view('InnerPannel.ProfileSection.ProfileUpdate', $view);
    }

    public function profileUpdate()
    {
        try {
            $trans = DB::beginTransaction();
            $getData = request()->all();
            $a = Auth::user();
            $insertAllRecord = DB::transaction(function () use ($getData, $a) {
                DB::table('users')->where('id', $a->id)->where('deletedFlag', 0)->update([
                    'firstName' => $getData['firstName'],
                    'lastName' => $getData['lastName'],
                    'email' => $getData['email'],
                    'shopName' => $getData['shopName'],
                    'dateOfBirth' => $getData['dateOfBirth'],
                    'pinCode' => $getData['pinCode'],
                    'state' => $getData['state'],
                    'stateId' => $getData['stateId'],
                    'city' => $getData['city'],
                    'cityId' => $getData['cityId'],
                    'mobile' => $getData['mobile'],
                    'gender' => $getData['gender'],
                    'address' => $getData['address'],
                ]);
            });


            if (is_null($insertAllRecord)) {
                $status = true;
                $msg = "profile Update successfully";
            } else {
                $status = false;
                $msg = "Something went wrong.Please try again later.";
            }
            DB::commit($trans);
        } catch (\Exception $t) {
            DB::rollBack($trans);
            Log::error("Error", [
                'Controller' => 'ProfileController',
                'Method' => 'profileUpdate',
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

    public function changePasswordIndex()
    {
        return view('InnerPannel.ProfileSection.ChangePassword');
    }

    public function changePassword()
    {
        try {
            $trans = DB::beginTransaction();
            $getData = request()->all();
            $a = Auth::user();
            $insertAllRecord = DB::transaction(function () use ($getData, $a) {
                DB::table('users')->where('id', $a->id)->where('deletedFlag', 0)->update([
                    'password' => Hash::make($getData['newPassword']),
                    'temp' => $getData['newPassword']
                ]);
            });


            if (is_null($insertAllRecord)) {
                $status = true;
                $msg = "Password Changed successfully";
            } else {
                $status = false;
                $msg = "Something went wrong.Please try again later.";
            }
            DB::commit($trans);
        } catch (\Exception $t) {
            DB::rollBack($trans);
            Log::error("Error", [
                'Controller' => 'ProfileController',
                'Method' => 'changePassword',
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

    public function profileBankUpdate()
    {
        try {
            $trans = DB::beginTransaction();
            $getData = request()->all();
            $a = Auth::user();
            $insertAllRecord = DB::transaction(function () use ($getData, $a) {
                DB::table('users')->where('id', $a->id)->where('deletedFlag', 0)->update([
                    'bankAccHolderName' => $getData['accHolderName'],
                    'bankAccNo' => $getData['accountNumber'],
                    'bankName' => $getData['bankName'],
                    'bankIfscCode' => $getData['ifscCode']
                ]);
            });


            if (is_null($insertAllRecord)) {
                $status = true;
                $msg = "Bank Profile Updated successfully";
            } else {
                $status = false;
                $msg = "Something went wrong.Please try again later.";
            }
            DB::commit($trans);
        } catch (\Exception $t) {
            DB::rollBack($trans);
            Log::error("Error", [
                'Controller' => 'ProfileController',
                'Method' => 'profileBankUpdate',
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

    public function kycUpdate()
    {
        try {
            $trans = DB::beginTransaction();
            $getData = request()->all();
            $a = Auth::user();
            //pancard
            $panPhoto = $getData['uploadPanPhoto'];
            $extensionPan = $panPhoto->getClientOriginalExtension();
            Storage::disk('profileDetails')->put('/' . $a->id . '/panCard/pancard.' . $extensionPan,  File::get($panPhoto));
            $filePan = $a->id . '/panCard/pancard.' . $extensionPan;

            $adharFrontPhoto = $getData['uploadAadhaarfrnPhoto'];
            $extensionAdharFront = $panPhoto->getClientOriginalExtension();
            Storage::disk('profileDetails')->put('/' . $a->id . '/Aadhaar/AadhaarFront.' . $extensionAdharFront,  File::get($adharFrontPhoto));
            $fileAaFront = $a->id . '/Aadhaar/AadhaarFront.' . $extensionAdharFront;
            $adharBackPhoto = $getData['uploadAadhaarBackPhoto'];
            $extensionAdharBack = $panPhoto->getClientOriginalExtension();
            Storage::disk('profileDetails')->put('/' . $a->id . '/Aadhaar/AadhaarBack.' . $extensionAdharBack,  File::get($adharBackPhoto));
            $fileAaBack = $a->id . '/Aadhaar/AadhaarBack.' . $extensionAdharBack;
            $insertAllRecord = DB::transaction(function () use ($getData, $a, $filePan, $fileAaFront, $fileAaBack) {
                DB::table('users')->where('id', $a->id)->where('deletedFlag', 0)->update([
                    'panCard' => $getData['panCardNo'],
                    'aadharCard' => $getData['aadharCardNo'],
                    'uploadPanCard' => $filePan,
                    'uploadAadharFront' => $fileAaFront,
                    'uploadAadharBack' => $fileAaBack,

                ]);
            });


            if (is_null($insertAllRecord)) {
                $status = true;
                $msg = "Kyc Profile Updated successfully";
            } else {
                $status = false;
                $msg = "Something went wrong.Please try again later.";
            }
            DB::commit($trans);
        } catch (\Exception $t) {
            DB::rollBack($trans);
            Log::error("Error", [
                'Controller' => 'ProfileController',
                'Method' => 'profileBankUpdate',
                'Error' => $t->getMessage(),
            ]);
            $status = false;
            $msg = "Something went wrong. please try again later";
        }
        
        session()->flash('msg', $msg);
        session()->flash('status', $status);
        return redirect()->route('updtPro');
    }
}
