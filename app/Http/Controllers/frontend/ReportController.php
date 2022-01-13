<?php

namespace App\Http\Controllers\frontend;
use App\Models\Deposit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
      $list=Deposit::all();
        return view('website.pages.Members.member-report',compact('list'));
    }

}
