@extends('website.pages.service')
@section('mehadi')
  <article  style="margin-left:30px;">
    <h4  style="text-align:center;">Member profile</h4>
                 <br>

              <div class="custom-box">


                <div class="icn-main-container" >

                   <img src="{{ url('/img/friends/fr-01.jpg') }}" class="img-square" width="150" height="120" alt="member image">
                </div>
                <br>
                <br>
                <ul class="pricing">
                  <li>Member Name:</li>
                  <li>Member ID:</li>
                    <li>NID Number</li>
                  <li>Account Number:</li>
                  <li>Total Amount:</li>
                  <li>Date of Birth:</li>
                  <li>Email Address:</li>
                  <li>Address:</li>
                </ul>

                <a class="btn btn-theme" href="#">Print Now</a>
              </div></article>
              </div>

              <!-- end custombox -->
           @endsection
