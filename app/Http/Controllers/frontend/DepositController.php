<?php

namespace App\Http\Controllers\frontend;
use App\Models\Deposit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function store(Request $request)
    {
          Deposit::create([
          'member_id'=>$request->member_id,
          'member_name'=>$request->member_name,
          'account_no'=>$request->account_no,
          'branch'=>$request->branch,
          'method'=>$request->method,
          'amount'=>$request->amount,
          'date'=>$request->date,
          'transaction'=>$request->transaction,

           ]);


    }

}
