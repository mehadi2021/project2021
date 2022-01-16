@extends('website.pages.service')
@section('mehadi')
  <article  style="margin-left:30px;">
    <h4  style="text-align:center;">Member profile</h4>
                 <br>

              <div class="custom-box"  style="margin-left:300px;" >


                <div class="icn-main-container" >

            <img src="{{url('/img/friends/me.jpg')}}" class="img-square" width="155" height="125" alt="member image">
                </div>
                <br>
                <br>
                <ul class="pricing">
                  <li>UserName:{{$members->name}}</li>
                  <li>User Email Address:{{$members->email}}</li>
                    <li>Mobile:{{$members->mobile}}</li>
                  <li>Address:</li>
                </ul>

                <a class="btn btn-theme" href="#">Print Now</a>
              </div></article>
              </div>
@endsection
