@extends('website.pages.service')
@section('mehadi')
              <article  style="margin-left:30px;">
                <img src="assets/images/single_service_02.jpg" alt="">
                <h4 style="text-align:center;">Loan Request</h4>
                <br>
              <form action="" class="form-horizontal form-label-left"  method="post">
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
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Loan Amount</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
  
                      <select class="form-control" name="amount" id=""   aria-label="Default select example" required>

                        <option value="Null" >select from here</option>
                        @foreach($list as $lists)
                       <option value="{{ $lists->amount }}">{{ $lists->amount }}</option>
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

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Payment Term</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="payment" class="form-control" placeholder=" Enter Your payment term" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Total Amount Interest</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="total_amount"  class="form-control" placeholder=" Enter Your total amount interest" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Payment Schedule</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="payment" class="form-control" placeholder=" Enter Your Payment Schedule" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Due Date</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="date"  name="date"  class="form-control" placeholder=" Enter Your due date" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>


    <div class="form-group row">
         <div class="col-md-9 offset-md-3">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-success">Cancel</button>
         </div>
     </div>

</form>
 </article>

          </div>
        </div>
      </div>
    </div>

@endsection
