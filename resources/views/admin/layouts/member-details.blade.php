@extends('admin.master')
@section('content')


<h1 class="modal-title text-warning"  style="color:black;text-align:center;">Information Details</h1>

    <div class="panel-body" >

        <div class="row">

          <div class="col-lg-12"  id="printableArea">

              <div class="custom-box" >

                <div class="servicetitle">
                  <h4>Member Information</h4>
                  <hr>
                </div>
                <br>

                <div class="icn-main-container" >
@foreach ($list as  $lists )


                   <img src="{{url('/uploads/'.$lists->image)}}" class="img-square" width="150" height="120" alt="member image">
                </div>
                <br>
                <br>
                <ul class="pricing" style="font-size:70px;">
                  <li>Member Name:{{$lists->name}}</li>
                  <li>Member ID:{{$lists->member_id}}</li>
                 <li>NID Number:{{$lists->voter_id}}</li>
                  <li>Account Number:{{$lists->account_number}}</li>

                  <li>Date of Birth:{{$lists->dob}}</li>
                  <li>Email Address:</li>
                  <li>Address:{{$lists->address}}</li>
                </ul>
              </div>
@endforeach
@foreach ($me as $mes )
<li>Total Amount:{{$mes->amount}}</li>
@endforeach



          </div>
        </div></div>
        <div style="margin:43px; text-align:center;">

             <a href="#" class="btn btn-theme" onclick="printDiv('printableArea')">Print Now</a>
              <a class="btn btn-theme" href="{{route('admin.members.list'); }}"> Return Back</a>

            </div>



              </section>





 <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>





              <!-- end custombox -->
           @endsection
