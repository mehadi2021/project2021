<?php

namespace App\Http\Controllers\Backend;
use App\Models\Deposit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function deposit_list(){
          $deposits=Deposit::all();
       return   view('admin.layouts.deposit-list',compact('deposits'));
    }
    //  public function deposit_details(){
    //       $deposits=Deposit::all();
    //    return   view('admin.layouts.member-details',compact('deposits'));
    // }
}
