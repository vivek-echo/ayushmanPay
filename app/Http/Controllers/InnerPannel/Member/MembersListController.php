<?php

namespace App\Http\Controllers\InnerPannel\Member;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class MembersListController extends Controller
{
  
    public function index()
    {
        $a =DB::table('users')->where('deletedFlag',0)->get();
        $view['profile'] = $a;
        return view('InnerPannel.MemberList.MemberList',$view);
    }

    public function getMembersDetails(){
        $getData=request()->all();
        $a =DB::table('users')->where('deletedFlag',0)->where('id',$getData['id'])->select('id','firstName','lastName','email','shopName','dateOfBirth','pinCode','state','city','mobile','gender','address','memberType','bankAccHolderName','bankAccNo','bankName','bankIfscCode','panCard','aadharCard','uploadPanCard','uploadAadharFront','uploadAadharBack','bankVerify','webKyc','profileUpdate')->first();
        $res['id']= $a->id;
        $res['firstName']= $a->firstName;
        $res['lastName']= $a->lastName;
        $res['email']= $a->email;
        $res['shopName']= $a->shopName;
        $res['dateOfBirth']= $a->dateOfBirth;
        $res['pinCode']= $a->pinCode;
        $res['state']= $a->state;
        $res['city']= $a->city;
        $res['mobile']= $a->mobile;
        $res['gender']= $a->gender;
        $res['address']= $a->address;
        $res['memberType']= config('constant.USERS')[$a->memberType];
        $res['bankAccHolderName']= $a->bankAccHolderName;
        $res['bankAccNo']= $a->bankAccNo;
        $res['bankName']= $a->bankName;
        $res['bankIfscCode']= $a->bankIfscCode;
        $res['panCard']= $a->panCard;
        $res['aadharCard']= $a->aadharCard;
        $res['panImg'] = url('/')."/profileDetails/".$a->uploadPanCard;
        $res['aadharFrontImg'] = url('/')."/profileDetails/".$a->uploadAadharFront;
        $res['aadharBackImg'] = url('/')."/profileDetails/".$a->uploadAadharBack;

        $res['bankVerify']= $a->bankVerify;
        $res['webKyc']= $a->webKyc;
        $res['profileUpdate']= $a->profileUpdate;
        return response()->json([
            'profile'=> $res
        ]);
    }

    public function verifykycbtn(){
        $status = false;
        $msg = "";
        $getData = request()->all();
        $update = DB::table('users')->where('id',$getData['userIdMember'])->update([
            'profileUpdate' =>$getData['actionStatus'],
            'profileUpdateRemark'=>$getData['actionRemark']
        ]);
        if($update){
            $status = true;
            $msg = "Profile Verified Successfully";
        }else{
            $status = false;
            $msg = "Something went Wrong . Please try again later .";
        }
        return response()->json([
            'status'=>$status ,
            'msg'=>$msg
        ]);
    }
}
