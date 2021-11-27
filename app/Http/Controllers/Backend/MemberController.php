<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
 public function memberCreate()
    {
        return view('admin.layouts.member');

    }

      public function member_store (Request $request)
    {

 $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'account_no' => 'required|unique:members,account_no',
            'voter_id'=>'required|unique:members,voter_id',
            'phon_no'=>'required|unique:members,phon_no'
        ]);
        $add = Member::create([
            'user_id' =>$request->user_id,
            'address' => $request->address,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'voter_id' => $request->voter_id,
            'phon_no' => $request->phon_no,
            'account_no' => $request->account_no,
            'branch' => $request->branch,
            'image' => $request->member_image,
        ]);

    }

 public function memberList()
    {

         $list=Member::all();
         return view('admin.layouts.member-list', compact('list'));
     }
     public function details()
     {
         $list=Member::all();
         return view('admin.layouts.member-details', compact('list'));
     }







    }
