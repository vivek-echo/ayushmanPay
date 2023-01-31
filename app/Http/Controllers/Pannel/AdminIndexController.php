<?php
namespace App\Http\Controllers\Pannel;

use App\Http\Controllers\Controller;

class AdminIndexController extends Controller
{
    public function index()
    {
        return view('Pannel.AdminIndex');
    }
}