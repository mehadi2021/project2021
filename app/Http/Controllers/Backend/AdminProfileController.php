<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{

    public function profile()
    {
   return view('admin.layouts.admin-profile');

    }
     public function edit()
    {
   return view('admin.layouts.edit-profile');

    }




    public function dashboard()
    {
        $member =Member::count();
        return view('admin/layouts/home',compact('member'));

    }





}
