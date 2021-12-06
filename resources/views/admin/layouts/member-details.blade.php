@extends('admin.master')
@section('content')

 <div class="panel-body">

        <div class="row">

          <div class="col-lg-12">
            <div class="col-lg-12">

              <div class="custom-box">

                <div class="servicetitle">
                  <h4>Standard</h4>
                  <hr>
                </div>

                <div class="icn-main-container" >

                   <img src="{{url('/uploads/'.$lists->image)}}" class="img-square" width="150" height="120" alt="member image">
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                <ul class="pricing">
                  <li>150 Mb Storage</li>
                  <li>{{$lists->id}}</li>
                  <li>2 Sub Domains</li>
                  <li>3 MySQL DBs</li>
                  <li>2 Emails</li>
                  <li>WordPress Installation</li>
                  <li>24/7 Support</li>


                </ul>
                <a class="btn btn-theme" href="#">Order Now</a>
              </div>

              <!-- end custombox -->
           @endsection
