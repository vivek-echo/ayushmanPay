<?php

namespace App\Http\Controllers\InnerPannel\Member;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class MembersListController extends Controller
{
  
    public function index()
    {
      
        return view('InnerPannel.MembersList.MembersList');
    }
}
