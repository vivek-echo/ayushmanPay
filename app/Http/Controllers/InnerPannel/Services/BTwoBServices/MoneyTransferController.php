<?php

namespace App\Http\Controllers\InnerPannel\Services\BTwoBServices;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class MoneyTransferController extends Controller
{
    public function index()
    {
        return view("InnerPannel.Services.BtwoBServices.MoneyTransfer");
    }
    //for Bank List
    public function getBankList()
    {
        $bankList = DB::table('dmt-bank-list')->get();
        return response()->json([
           
            'data' =>$bankList
        ]);
    }
}