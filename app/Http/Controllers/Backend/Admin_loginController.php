<?php

namespace App\Http\Controllers\Backend;
use App\Models\News;
use App\Http\Controllers\Controller;
use App\Models\user_request;
use Illuminate\Http\Request;

class Admin_loginController extends Controller
{
    public function registration()
    {
        return view('admin.layouts.admin-registration');
    }
}
