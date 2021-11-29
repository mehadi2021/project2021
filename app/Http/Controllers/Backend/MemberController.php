<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
 public function member_create()
    {
        return view('admin.layouts.member');

    }

      public function  member_store (Request $request)
    {
        if ($request->hasFile('members_image'))
        {
            $file=$request->file('members_image');
           $filename= date('Ymdhms').'.'.$file->getClientOriginalExtension();
           $file-> storeAs('/uploads',$filename);

        } 


                 Member::create([
            'user_id'=>$request->user_id,
            'address'=>$request->address,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'voter_id'=>$request->voter_id,
            'phon_no'=>$request->phon_no,
            'account_no'=>$request->account_no,
            'branch'=>$request->branch,
            'image'=>$filename
        ]);

    }

 public function member_list()
    {

         $list=Member::all();
         return view('admin.layouts.member-list', compact('list'));
     }
 public function member_details()
     {
         $lists=Member::all();
         return view('admin.layouts.member-details', compact('lists'));
     }







    }
