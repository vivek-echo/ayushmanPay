<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use DB;

class HomePageController extends Controller
{
    public function index()
    {
        //    $token= Controller::getToken();
        //    dd($token);

        return view('Home.HomePage');
    }
}
