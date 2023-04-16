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

class WalletSummaryController extends Controller
{
    public function index()
    {
        $getData = request()->all();
        $resp=[];
        $view['searchView'] = 0;
        $service = config('constant.SERVICETRANS');
        $data = [];
        $user = Auth::user();
        if (isset($getData['btnSearchSubmit']) == 1) {
            $queryData = DB::table('user_wallet_log')->where('deletedFlag',0)->where('userId', $user->id);

            if (!empty($getData['fromDate'])) {
                $queryData =  $queryData->whereDate('createdOn', '>=', $getData['fromDate']);
            }
            if (!empty($getData['toDate'])) {
                $queryData =  $queryData->whereDate('createdOn', '<=', $getData['toDate']);
            }
            $view['searchView'] = 1;


            $queryData =  $queryData->orderBy('createdOn','desc')->get();

            if (!$queryData->isEmpty()) {
                $status = true;

                foreach ($queryData as $d) {
                    $res['walletAmount'] = !empty($d->walletAmount) ? $d->walletAmount : "";
                    $res['servicType'] = !empty($d->servicType) ? $service[$d->servicType] : "";
                    $res['transactionType'] = !empty($d->transactionType) ? $d->transactionType : "";
                    $res['ackno'] = !empty($d->ackno) ? $d->ackno : "--";
                    $res['riefId'] = !empty($d->riefId) ? $d->riefId : "--";
                    $res['message'] = !empty($d->message) ? $d->message : "--";
                    $res['createdOn'] = !empty($d->createdOn) ? $d->createdOn : "--";
                    array_push($data, $res);
                }
                $resp = $data;
            }
        }
        $view['dataView'] = $resp;

        return view('InnerPannel.WalletSection.WalletSummary',  $view);
    }

    public function getWalletLogs()
    {
        $getData = request()->all();
        $resp = [];
        $data = [];
        $service = config('constant.SERVICETRANS');
        
        $user = Auth::user();
        $queryData = DB::table('user_wallet_log')->where('deletedFlag',0)->where('userId', $user->id);
        if (!empty($getData['fromDate'])) {
            $queryData =  $queryData->whereDate('createdOn', '>=', $getData['fromDate']);
        }
        if (!empty($getData['toDate'])) {
            $queryData =  $queryData->whereDate('createdOn', '<=', $getData['toDate']);
        }
        $queryData =  $queryData->get();

        if (!$queryData->isEmpty()) {
            $status = true;

            foreach ($queryData as $d) {
                $res['walletAmount'] = !empty($d->walletAmount) ? $d->walletAmount : "";
                $res['servicType'] = !empty($d->servicType) ? $service[$d->servicType] : "";
                $res['transactionType'] = !empty($d->transactionType) ? $d->transactionType : "";
                $res['ackno'] = !empty($d->ackno) ? $d->ackno : "--";
                $res['riefId'] = !empty($d->riefId) ? $d->riefId : "--";
                $res['message'] = !empty($d->message) ? $d->message : "--";
                array_push($data, $res);
            }
            $resp = $data;
        } else {
            $status = false;
            $resp =  [];
        }

        return response()->json([
            'data' => $resp,
            'status' => $status
        ]);
    }
}
