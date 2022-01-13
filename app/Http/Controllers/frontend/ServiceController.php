<?php

namespace App\Http\Controllers\frontend;
use App\Models\Branch;
use App\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
    return view('website.pages.service');

    }
 public function deposit()
    {
          $branches=Branch::all();
         return view('website.pages.deposit', compact('branches'));

    }
    public function loan()
    {
    return view('website.pages.loan');

    }
    public function profile()
    {
          $members=Member::all();
         return view('website.pages.Members.member-profile', compact('members'));

    }








}
