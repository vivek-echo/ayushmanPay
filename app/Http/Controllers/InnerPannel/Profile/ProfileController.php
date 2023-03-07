<?php

namespace App\Http\Controllers\InnerPannel\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profileUpdateIndex()
    {
        $a = Auth::user();
        $profile = DB::table('users')->where('id', $a->id)->where('deletedFlag', 0)->first();
        $view['profile'] = $profile;
        return view('InnerPannel.ProfileSection.ProfileUpdate', $view);
    }

    public function profileUpdate()
    {
        try {
            $trans = DB::beginTransaction();
            $getData = request()->all();
            $a = Auth::user();
            $insertAllRecord = DB::transaction(function () use ( $getData,$a) {
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
}
