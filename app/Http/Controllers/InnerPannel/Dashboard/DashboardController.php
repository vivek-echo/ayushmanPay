<?php

namespace App\Http\Controllers\InnerPannel\Dashboard;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // dd(Controller::getToken());
        return view('InnerPannel.Dashboard.Dashboard');
    }
}
