<?php
namespace App\Http\Controllers\InnerPannel;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   
    public function index(){
        return view('InnerPannel.Dashboard');
    }
}