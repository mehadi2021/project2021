<?php

namespace App\Http\Controllers\Backend;
use App\Models\Loan;
use App\Http\Controllers\Controller;
use App\Models\user_request;
use Illuminate\Http\Request;

class LoanRequestController extends Controller
{
    public function add()
    {
        return view('admin.layouts.loan');
    }

     public function loan_store(Request $request )
     {
           Loan::create([
          'member_id'=>$request->member_id,
          'loan_amount'=>$request->loan_amount,
          'loan_interest'=>$request->loan_interest,
          'payment_term'=>$request->payment_term,
          'total_amount_interest'=>$request->total_amount_interest,
          'payment_schedule'=>$request->payment_schedule,
          'due_date'=>$request->due_date,

           ]);
           return redirect()->back()->with('success','Data entry successfully');

    }
    public function list(){
         $list=Loan::all();
         return view('admin.layouts.loanlist', compact('list'));
     }


}

