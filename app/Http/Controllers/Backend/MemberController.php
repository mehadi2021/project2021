<?php

namespace App\Http\Controllers\Backend;
use App\Models\Member;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{


    public function memberCreate()
    {
        return view('admin.layouts.add-member');

    }

    public function memberStore(Request $request)
    {

           Member::create([
              'date'=>$request->input('date'),
                'member_code'=>$request->input('member_id'),
               'center'=>$request->input('center'),
               'member_name'=>$request->input('member_name'),
               'h_name'=>$request->input('h_name'),
               'mother_name'=>$request->input('mother_name'),
                 'birth'=>$request->input('birth'),
               'phone_num'=>$request->input('phone'),
               'h_phone'=>$request->input('g_phone'),
               ] );
       }

    }
