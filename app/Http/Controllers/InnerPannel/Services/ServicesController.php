<?php

namespace App\Http\Controllers\InnerPannel\Services;

use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function index()
    {
        return view('InnerPannel.Services.Services');
    }
}
