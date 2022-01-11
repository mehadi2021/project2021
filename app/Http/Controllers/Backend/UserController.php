<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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

     public function registration()
    {
        return view('admin.layouts.admin-registration');
    }


     public function store(Request $request)
    {
        //validate this request
        // dd($request->all());
        $request->validate([
           'username'=>'required',
           'email'=>'email|required',
           'password'=>'required',
           'mobile'=>'required|digits:11',
        ]);

         $filename = "";
                    if($request->hasFile('image'))
                    {
                        $file= $request->file('image');
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads', $filename);
                    }


        User::create([
           'name'=>$request->username,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
           'mobile'=>$request->mobile,
           'role'=>$request->role,
          'image'=>$filename
        ]);

        return redirect()->route('admin.profile')->with('success','Registration Successful.');



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
