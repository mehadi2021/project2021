@extends('admin.master')
@section('content')

<h1 style="text-align: center; color:black;">Administrator Information</h1>

@if(session('success'))
    <div class="alert alert-success">
        {!!  session ('success')  !!}
    </div>
@endif

           <div class="row content-panel" style="margin-left:10px;">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                  <h4>mehadihasan.1720@gmail.com</h4>
                  <h5>Gmails</h5>
                  <h4>01714-797978</h4>
                  <h5>Mobile</h5>
                  <h4>$ 13,980</h4>
                  <h5>MONTHLY EARNINGS</h5>
                </div>
              </div>
              <!-- /col-md-4 -->

              <div class="col-md-4 profile-text">
                <h3>MehaDi HaSan</h3>
                <h5>Main Administrator</h5>
                <p>I am Mehdi Hasan.My home district Sherpur.I was complete my Bsc IUBAT university.</p>
                <br>
                <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="{{url('/uploads/'.auth()->user()->image)}}"class="img-circle"></p>
                  <p>
                    <button class="btn btn-theme"><i class="fa fa-check"></i> Follow</button>
                      <a href="{{route ('admin.registration') }}" class="btn btn-theme02" >Registration</a>
                    <a href="{{route ('admin.edit') }}" class="btn btn-theme02" >Profile Edit </a>
                  </p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /col-lg-12 -->
             <!-- /MAIN CONTENT -->
@endsection
