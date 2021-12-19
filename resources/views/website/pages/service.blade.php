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
              <li><a href='#tabs-1'>Member Profile <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'>Loan Request <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-3'>Payment <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-4'>Withdraw <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-9">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/single_service_01.jpg" alt="">
                <h4>Market Analysis</h4>
                <p>Vivamus sed feugiat elit. Pellentesque pretium, massa at placerat vehicula, neque turpis pulvinar tortor, eget convallis lorem odio non tortor. Donec massa est, fermentum sit amet felis ac, maximus luctus elit. Vivamus aliquet, dolor id imperdiet imperdiet, dui diam aliquet dui, a euismod metus enim ac velit. Vivamus eu tristique odio, vel tristique quam.
                <br><br>Proin eu molestie risus. Etiam suscipit pretium odio, at consectetur nisi. Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante.</p>
              </article>
              <article id='tabs-2'>
                <img src="assets/images/single_service_02.jpg" alt="">
                <h4>Loan Request</h4>
              <form action="" class="form-horizontal form-label-left"  method="post">
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
 </article>
              <article id='tabs-3'>
                <img src="assets/images/single_service_03.jpg" alt="">
                <h4>Accounting Service</h4>
                <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget.
                <br><br>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc vel ultrices nulla, ac tincidunt eros. Aenean quis tellus velit. Praesent pretium justo non auctor condimentum.</p>
              </article>
              <article id='tabs-4'>
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
