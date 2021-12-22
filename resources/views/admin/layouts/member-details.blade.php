@extends('admin.master')
@section('content')


<h1 class="modal-title text-warning"  style="color:black;text-align:center;">Information Details</h1>
<section class="panel">
<div class="panel-body">

        <div class="row">

          <div class="col-lg-12">
            <div class="col-lg-12">

              <div class="custom-box">

                <div class="servicetitle">
                  <h4>Member</h4>
                  <hr>
                </div>
                <br>

                <div class="icn-main-container" >

                   <img src="{{url('/uploads/'.$lists->image)}}" class="img-square" width="150" height="120" alt="member image">
                </div>
                <br>
                <br>
                <ul class="pricing">
                  <li>Member Name:</li>
                  <li>Member ID:{{$lists->id}}</li>
                    <li>NID Number</li>
                  <li>Account Number:</li>
                  <li>Total Amount:</li>
                  <li>Date of Birth:</li>
                  <li>Email Address:</li>
                  <li>Address:</li>
                </ul>

                <a class="btn btn-theme" href="#">Print Now</a>
                 <a class="btn btn-theme" href="{{route('admin.members.list'); }}"> Return Back</a>
              </div>

              <!-- end custombox -->
           @endsection
