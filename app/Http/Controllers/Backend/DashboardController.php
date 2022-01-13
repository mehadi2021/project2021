<?php

namespace App\Http\Controllers\Backend;
use App\Models\Member;
use App\Models\Loan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

           public function dashboard()
           {
               $member=Member::count();
                  $loans=Loan::count();
           return view('admin.layouts.DashBoard.home',compact('member','loans'));


           }

}
