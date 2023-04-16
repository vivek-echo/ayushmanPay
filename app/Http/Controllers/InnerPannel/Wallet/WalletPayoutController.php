<?php

namespace App\Http\Controllers\InnerPannel\Wallet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class WalletPayoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $dataList = [];
        $dataListCount = 0;
        $msg = "";
        $param['merchantid'] = $user->userId;
        $fetchbenDe =   Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post('' . config('constant.SERVICE_URL') . 'api/v1/service/payout/payout/list')->json();
        if ($fetchbenDe['status'] == true) {
            $dataList = $fetchbenDe['data'];
        } else {
            $msg = $fetchbenDe['message'];
        }
        $view['dataList'] = $dataList;
        $dataListCount = count($dataList);
        $view['dataListCount'] =  $dataListCount;
        $view['status'] = $fetchbenDe['status'];
        $view['message'] = $msg;
        return view('InnerPannel.WalletSection.WalletPayout', $view);
    }

    public function addAccountPayout()
    {

        $getData = request()->all();
        $user = Auth::user();
        $param['bankid'] =  $getData['bankid'];
        $param['merchant_code'] = $user->userId;
        $param['account'] = $getData['account'];
        $param['ifsc'] = $getData['ifsc'];
        $param['name'] = $getData['name'];
        $param['account_type'] = $getData['account_type'];
        $runApi = Controller::getHeaders()->withBody(json_encode($param), 'application/json')
            ->post('' . config('constant.SERVICE_URL') . 'api/v1/service/payout/payout/add')->json();
        return response()->json([
            'api' => $runApi
        ]);
    }

    public function uploadPayoutDoc(Request $req)
    {

        $getData = request()->all();
        $srcUploadPassbook = "";
        $srcUploadAadhaarFront = "";
        $srcUploadAadhaarBack = "";
        $srcUploadPan = "";
        //passbook
        $uploadPassbook = $req->file('uploadPassbook');
      
        if( $uploadPassbook){
            $uploadPassbookName = $uploadPassbook->getClientOriginalName();
            $imgDataPassbook = base64_encode(file_get_contents($uploadPassbook));
            $srcUploadPassbook = 'data:' . $uploadPassbook->getmimeType() .';name='. $uploadPassbookName.';base64,' . $imgDataPassbook;
           
        }

         //aadhaar front
         $uploadAadhaarFront = $req->file('uploadAadhaarFront');
         if( $uploadAadhaarFront){
             $uploadAadhaarFrontName = $uploadAadhaarFront->getClientOriginalName();
             $imgDataAadhaarFront = base64_encode(file_get_contents($uploadAadhaarFront));
             $srcUploadAadhaarFront = 'data:' . $uploadAadhaarFront->getmimeType() .';name='. $uploadAadhaarFrontName.';base64,' . $imgDataAadhaarFront;
         }

          //aadhaar back
          $uploadAadhaarBack = $req->file('uploadAadhaarBack');
          if( $uploadAadhaarBack){
              $uploadAadhaarBackName = $uploadAadhaarBack->getClientOriginalName();
              $imgDataAadhaarBack = base64_encode(file_get_contents($uploadAadhaarBack));
              $srcUploadAadhaarBack = 'data:' . $uploadAadhaarBack->getmimeType() .';name='. $uploadAadhaarBackName.';base64,' . $imgDataAadhaarBack;
          }

        //pan
        $uploadPan = $req->file('uploadPan');
        if( $uploadPan){
            $uploadPanName = $uploadPan->getClientOriginalName();
            $imgDataPan = base64_encode(file_get_contents($uploadPan));
            $srcUploadPan = 'data:' . $uploadPan->getmimeType() .';name='. $uploadPanName.';base64,' . $imgDataPan;
        }
       $params['doctype'] = $getData['docTypeFileUpload'];
       $params['passbook'] =$srcUploadPassbook;
       $params['panimage'] =$srcUploadPan;
       $params['bene_id'] = $getData['beneidFileUpload'];
       $params['front_image'] =$srcUploadAadhaarFront;
       $params['back_image'] =$srcUploadAadhaarBack;
       dd( $params);
       $runApi = Controller::getHeaders()->withBody(json_encode($params), 'application/json')
       ->post('' . config('constant.SERVICE_URL') . 'api/v1/service/payout/payout/uploaddocument')->json();
       dd($runApi);
    }
}
