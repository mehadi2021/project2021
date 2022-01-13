<?php

namespace App\Http\Controllers\Backend;
use App\Models\Loan;
use App\Models\Member;
use App\Models\User;
use App\Models\Add_loan;
use App\Http\Controllers\Controller;
use App\Models\user_request;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loan_add()
    {
        $list=Add_loan::all();
        return view('admin.layouts.LoanRequest.loan',compact('list'));
    }

     public function loan_store(Request $request )
     {
     // dd($request->all());
         $request->validate([
        //    'member_id'=>'required|alpha_num|min:5|max:8',
        //    'loan_amount'=>'required|numeric',
        //     'loan_interest'=>'required|numeric',
        //      'payment_term'=>'required|numeric',
        //     'total_amount_interest'=>'required|numeric',
        //      'payment_schedule'=>'required|date',
        //      'due_date'=>'required|date'

           ]);
           Loan::create([
          'member_id'=>$request->member_id,
         'member_name'=>$request->member_name,
           'ac_no'=>$request->ac_no,
           'type'=>$request->type,
          'loan_amount'=>$request->loan_amount,
          'rate'=>$request->rate,
          'time'=>$request->time,
          'interest'=>$request->interest,
          'emi'=>$request->emi,
          'payment_date'=>$request->payment_date,

           ]);
           return redirect()->back()->with('success','Data entry successfully');

    }
    public function loan_list(){
         $lists=Loan::all();
         return view('admin.layouts.LoanRequest.loan-list', compact('lists'));
     }


  public function loan_approve($id)
      {
         $data=Loan::find($id);
         $data->status='Approve';
         $data->save();
         return redirect()->back()->with('success','Loan approve successful');
     }

      public function loan_cancel($id)
      {
         $data=Loan::find($id);
         $data->status='Reject';
         $data->save();
         return redirect()->back()->with('success','Loan Reject!!');;
     }
       public function loan_details($id){
          $members=Member::all();
          $users=User::all();
            $loans=Loan::where('member_id',$id)->get();;
       return   view('admin.layouts.LoanRequest.loan-details',compact('users','members','loans'));
    }



      public function loan_delete($id)
      {
         $list=Loan::find($id);
         $list->delete();
         return redirect()->back();
     }


}

