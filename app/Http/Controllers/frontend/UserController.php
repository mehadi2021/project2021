<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\user_request;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function page(){
        return view('user.user');
    }
}
