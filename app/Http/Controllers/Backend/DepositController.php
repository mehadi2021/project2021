<?php

namespace App\Http\Controllers\Backend;
use App\Models\Deposit;
use App\Models\Member;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function deposit_list(){

  $key=null;
        if(request()->search)
        {
           $key = request()->search;
       $deposits=Deposit::where('member_id','LIKE','%'.$key.'%')->paginate(2);
        //  dd($list);
        return view('admin.layouts.Deposit.deposit-list', compact('deposits','key'));
    }

        $deposits=Deposit::orderBy('id','desc')->paginate(2);
        return view('admin.layouts.Deposit.deposit-list', compact('deposits','key'));
     }











    //       $deposits=Deposit::paginate(2);
    //    return   view('admin.layouts.Deposit.deposit-list',compact('deposits'));
    // }
     public function deposit_details($id){
          $members=Member::where('member_id',$id)->get();
        //   $users=User::all();
            $amount=Deposit::where('member_id',$id)->sum('amount');
            $deposits=Deposit::where('member_id',$id)->get();
       return   view('admin.layouts.Deposit.deposit-details',compact('members','deposits','amount'));
    }
}
