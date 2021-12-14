<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration(Request $request)
    {
        //validate this request
        $request->validate([
           'username'=>'required',
           'email'=>'email|required',
           'password'=>'required',
           'mobile'=>'required|digits:10',
        ]);

        User::create([
           'name'=>$request->username,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
           'mobile'=>$request->mobile,
        ]);

        return redirect()->back()->with('batch','Registration Successful.');



    }
}
