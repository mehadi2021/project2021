@extends ('admin.master')
@section('content')

     <h1 class="modal-title text-warning"  style="color:black;text-align:center;">Request Loan</h1>
   <section class="panel">

                <div class="panel-body">



<form action="{{ route('admin.loan.store') }}" class="form-horizontal form-label-left"  method="post">
 @csrf

   <div class="panel-body">
                    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<div style="margin-top: 10px;">

@if(session('success'))
    <div class="alert alert-success">
        {!!  session ('success')  !!}
    </div>
@endif

 @if(session('error'))
    <div class="alert alert-danger">
           { !! session('error') !! }
    </div>
@endif



     @csrf
<div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Member ID</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="member_id"  class="form-control"  required placeholder=" Enter your Member ID" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>
     <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter Member Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="member_name" class="form-control" placeholder=" Enter your Name" data-inputmask="'mask' : '(999) 999-9999'">
              </div>
    </div>
    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter Account No</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="ac_no" class="form-control" placeholder=" Enter your Name" data-inputmask="'mask' : '(999) 999-9999'">
              </div>
    </div>

 <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Types of Loan</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">

                      <select class="form-control" name="type" id=""   aria-label="Default select example" required>

                        <option value="Null" >select from here</option>
                        @foreach($list as $lists)
                       <option value="{{ $lists->amount }}">{{ $lists->name }}</option>
 @endforeach
                      </select>

</div>
     </div>


    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Loan Amount</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">

                      <select class="form-control" name="loan_amount" id=""   aria-label="Default select example" required>

                        <option value="Null" >select from here</option>
                        @foreach($list as $lists)
                       <option value="{{ $lists->amount }}">{{ $lists->amount }}</option>
 @endforeach
                      </select>

</div>
     </div>
  <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Loan Rate</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
   <select class="form-control" name="rate" id=""   aria-label="Default select example" required>

                        <option value="Null" >select from here</option>
                        @foreach($list as $lists)
                       <option value="{{ $lists->interest }}" >{{ $lists->rate }}</option>
 @endforeach
                      </select>
                       </div>
                     </div>

                       <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Loan Time</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
   <select class="form-control" name="time" id=""   aria-label="Default select example" required>

                        <option value="Null" >select from here</option>
                        @foreach($list as $lists)
                       <option value="{{ $lists->interest }}" >{{ $lists->time }}</option>
 @endforeach
                      </select>
                       </div>
                     </div>


      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Loan Interest</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
   <select class="form-control" name="interest" id=""   aria-label="Default select example" required>

                        <option value="Null" >select from here</option>
                        @foreach($list as $lists)
                       <option value="{{ $lists->interest }}" >{{ $lists->interest }}</option>
 @endforeach
                      </select>
                       </div>
                     </div>

    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Loan EMI</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
   <select class="form-control" name="emi" id=""   aria-label="Default select example" required>

                        <option value="Null" >select from here</option>
                        @foreach($list as $lists)
                       <option value="{{ $lists->interest }}" >{{ $lists->emi}}</option>
 @endforeach
                      </select>
                       </div>
                     </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Payment Date</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="date"  name="payment_date"  class="form-control" placeholder=" Enter Your total amount interest" data-inputmask="'mask': '99/99/9999'">
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
