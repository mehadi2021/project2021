@extends('website.user')
@section('content')

<div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Our Services</h1>
            <span>We are over 20 years of experience</span>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services">
      <div class="container">
        <div class="row" id="tabs">
          <div class="col-md-3">
            <ul>
              <li><a href='#tabs-1'>Deposit <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'>Loan Request <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-3'>Payment <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-4'>Profile <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-9"  >
              <article id='tabs-1' style="margin-left:30px;">
                <img src="assets/images/single_service_01.jpg" alt="">
                 <h4  style="text-align:center;">Deposit</h4>
                 <br>
  
               <form action="" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">
 @csrf

  
     <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Member ID</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="id"  class="form-control"  required placeholder=" Enter your Member ID" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>
    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Member Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="name"  class="form-control"  required placeholder=" Enter your Name" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>
      <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Account Number</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="Number"  name="account_no" class="form-control" required placeholder=" Enter Your Account Number" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Branch Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="branch" class="form-control" required  placeholder=" Enter Your Branch Name" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Payment Method</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                   <select class="form-control" name="gender" id=""   aria-label="Default select example" required>
                        <option value="Null" >select from here</option>
                        <option value="Male">Bkash</option>
                        <option value="Female">Nogad</option>
                        <option value="Other">Rocket</option>
                      </select>
                       </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Amount</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="number"  name="amount" class="form-control"  required placeholder=" Enter Your Amount" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Date</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
             <input type="date"  name="date"  class="form-control" required placeholder=" Enter Today Date" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>
    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Transation Number</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text" name="t_num"  class="form-control"  required placeholder=" Enter Your Transation Number" data-inputmask="'mask': '99/99/9999'">
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
              <article id='tabs-2' style="margin-left:30px;">
                <img src="assets/images/single_service_02.jpg" alt="">
                <h4 style="text-align:center;">Loan Request</h4>
                <br>
              <form action="" class="form-horizontal form-label-left"  method="post">
 @csrf
<div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Member ID</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="id"  class="form-control"  required placeholder=" Enter your Member ID" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>
     <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter Member Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="name" class="form-control" placeholder=" Enter your Name" data-inputmask="'mask' : '(999) 999-9999'">
              </div>
    </div>

    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Loan Amount</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="amount" class="form-control" placeholder=" Enter your amount" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>

      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Loan Interest</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="interest" class="form-control" placeholder=" Enter Your loan interest" data-inputmask="'mask': '99/99/9999'">
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
              <article id='tabs-3' style="margin-left:30px;">
                <img src="assets/images/single_service_03.jpg" alt="">
                <h4>Accounting Service</h4>
                <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget.
                <br><br>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vel ultrices nulla, ac tincidunt eros. Aenean quis tellus velit. Praesent pretium justo non auctor condimentum.</p>
              </article>
              <article id='tabs-4' style="margin-left:30px;">
                <img src="assets/images/single_service_04.jpg" alt="">
                <h4>Overall Evaluation</h4>
                <p>Integer vehicula sapien quis dolor efficitur, eget molestie eros tempus. Curabitur sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem turpis quis libero. Quisque vulputate lacinia nisl ac lobortis. Ut ultricies maximus turpis, in sollicitudin ligula posuere vel.
                <br><br>Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris eu tortor consectetur tristique. Etiam suscipit ante a odio consequat, in ornare lacus suscipit. Cras ac libero massa. Quisque rhoncus velit feugiat vulputate mollis. Donec nisl eros, malesuada sed nisi id, condimentum condimentum quam.</p>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>

@endsection
