<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function profile()
    {
   return view('admin.layouts.admin-profile');

    }

      public function page()
    {
   return view('admin.layouts.login');

    }



 public function log(Request $request){
        // dd($request->all());

         $post= $request->except('_token');
        //  dd(post);
        // dd(Auth::attempt($post));
         if (Auth::attempt($post)) {
             return redirect()->route('admin')->with('success','login Successful.....');
         }
         else
         return redirect()->route('admin.page')->with('success','<strong>Sorry!</strong> email and password not match...!');
     }

     public function logout(){
         Auth::logout();
         return redirect()->route('admin.page')->with('success','Thank You');
     }


     public function edit()
    {
   return view('admin.layouts.edit-profile');

    }

}
