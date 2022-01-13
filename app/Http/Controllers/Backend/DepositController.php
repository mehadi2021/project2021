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
          $deposits=Deposit::all();
       return   view('admin.layouts.Deposit.deposit-list',compact('deposits'));
    }
     public function deposit_details($id){
          $members=Member::all();
          $users=User::all();
            $amount=Deposit::where('member_id',$id)->sum('amount');
            $deposits=Deposit::where('member_id',$id)->get();
       return   view('admin.layouts.Deposit.deposit-details',compact('users','members','deposits','amount'));
    }
}
