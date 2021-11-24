@extends ('admin.master')
@section('content')

     <h1 class="modal-title text-warning"  style="color:black;text-align:center;">Request Loan</h1>
   <section class="panel">

                <div class="panel-body">



<form action="{{ route('admin.loan.store') }}" class="form-horizontal form-label-left"  method="post">
 @csrf

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter Member</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                  <select class="form-control" name="gender" id="" aria-label="Default select example"required>
                        <option value="Null" >select from here</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                  </select>
              </div>
    </div>

    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Loan Amount</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="loan_amount" class="form-control" placeholder=" Enter your amount" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>

      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Loan Interest</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="loan_interest" class="form-control" placeholder=" Enter Your loan interest" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Payment Term</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="payment_term" class="form-control" placeholder=" Enter Your payment term" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Total Amount Interest</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="total_amount_interest"  class="form-control" placeholder=" Enter Your total amount interest" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Payment Schedule</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="payment_schedule" class="form-control" placeholder=" Enter Your Payment Schedule" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Due Date</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="due_date"  class="form-control" placeholder=" Enter Your due date" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>


    <div class="form-group row">
         <div class="col-md-9 offset-md-3">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-success">Cancel</button>
         </div>
     </div>

</form>

@endsection
