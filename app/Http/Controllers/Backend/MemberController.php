<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Helpers;
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
          $request->validate([
            'user_id'=>'required|unique:members|alpha_num|min:5|max:8',
            'dob'=>'required',
            'address'=>'required|alpha',
            'gender'=>'required',
            'voter_id'=>'required|unique:members',
            'phon_no'=>'required|digits:11',
            'account_no'=>'required|numeric|min:6',
            'branch'=>'required|alpha'
        ]);
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

         $list=Member::orderBy('id','desc')->paginate(1);
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

            public function member_edit($id)
             {
                 //dd($id);
                 $lis=Member::find($id);
                return  view('admin.layouts.edit-member',compact('lis'));
             }
             public function member_update(Request $request,$id)
             {
        //         $request->validate([
        //     'user_id'=>'required|unique:members|alpha_num|min:5|max:8',
        //     'dob'=>'required',
        //     'address'=>'required|alpha',
        //     'gender'=>'required',
        //     'voter_id'=>'required|unique:members',
        //     'phon_no'=>'required|digits:11',
        //     'account_no'=>'required|numeric|min:6',
        //     'branch'=>'required|alpha'
        // ]);
      $list=Member::find($id);
      $filename =$list->image;
                    if($request->hasFile('members_image'))
                    {
                        $file= $request->file('members_image');
                        $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                        $file->storeAs('/uploads', $filename);
                    }
        $list->update([
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
                 return redirect()->route('admin.members.list')->with('success','Update Successful');
             }

  public function mehadi1()
             {

           return  view('website.pages.calculation');
             }

   public function mehadi(Request $request)
             {
 $me=$request->m;
 $md=$request->mh;
 $mr=$request->mhr;
// dd($me);
             return  interest($me,$md,$mr);
             }


               public function member_search()
    {

           $key = request()->search;
        $list= Member::where('user_id','LIKE',"%{$key}%")->get();
        // dd($list);
        return view('admin.layouts.member-search', compact('list'));
     }

    }
