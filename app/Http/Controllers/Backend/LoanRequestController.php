<?php

namespace App\Http\Controllers\Backend;
use App\Models\Loan;
use App\Http\Controllers\Controller;
use App\Models\user_request;
use Illuminate\Http\Request;

class LoanRequestController extends Controller
{
    public function loan_add()
    {
        return view('admin.layouts.loan');
    }

     public function loan_store(Request $request )
     {
     // dd($request->all());
         $request->validate([
           'member_id'=>'required|alpha_num|min:5|max:8',
           'loan_amount'=>'required|numeric',
            'loan_interest'=>'required|numeric',
             'payment_term'=>'required|numeric',
            'total_amount_interest'=>'required|numeric',
             'payment_schedule'=>'required|date',
             'due_date'=>'required|date'

           ]);
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
    public function loan_list(){
         $list=Loan::all();
         return view('admin.layouts.loan-list', compact('list'));
     }
      public function loan_delete($id)
      {
         $list=Loan::find($id);
         $list->delete();
         return redirect()->back();
     }


}

