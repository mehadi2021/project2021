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
       return   view('admin.layouts.deposit-list',compact('deposits'));
    }
     public function deposit_details($id){
          $members=Member::all();
          $users=User::all();
            $deposits=Deposit::where('member_id',$id)->get();;
       return   view('admin.layouts.deposit-details',compact('users','members','deposits'));
    }
}
