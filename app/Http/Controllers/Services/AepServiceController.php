<?php
namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use DB;

class AepServiceController extends Controller
{
    public function index(){    
        return view('Services.AepService');
    }
}