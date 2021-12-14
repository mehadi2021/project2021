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
        $filename = "";
                    if($request->hasFile('members_image'))
                    {
                        $file= $request->file('members_image');
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads', $filename);
                    }

                 Member::create([
            'user_id'=>$request->user_id,
            'dob'=>$request->dob,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'voter_id'=>$request->voter_id,
            'phon_no'=>$request->phon_no,
            'account_no'=>$request->account_no,
            'branch'=>$request->branch,
            'image'=>$filename
        ]);

          return redirect()->back()->with('success', 'Member added successfully');

    }

              public function member_list()
    {

         $list=Member::all();
         return view('admin.layouts.member-list', compact('list'));
     }
             public function member_details($id)
             {
                 $lists=Member::find($id);
                 return view('admin.layouts.member-details', compact('lists'));
             }
             public function member_delete($id)
             {
                 //dd($id);
                 $lis=Member::find($id);


                 $lis->delete();


                 return redirect()->back();
             }



    }
