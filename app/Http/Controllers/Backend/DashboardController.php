<?php

namespace App\Http\Controllers\Backend;
use App\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

           public function dashboard()
           {
               $member=Member::count();
           return view('admin/layouts/home',compact('member'));


           }




}
