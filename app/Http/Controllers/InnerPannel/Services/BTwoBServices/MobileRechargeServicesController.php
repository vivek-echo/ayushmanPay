<?php

namespace App\Http\Controllers\InnerPannel\Services\BTwoBServices;

use App\Http\Controllers\CommonController;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Http;

class MobileRechargeServicesController extends Controller
{
    
    public function index(){
        return view("InnerPannel.Services.BtwoBServices.MobileRechargeService");
    }
}