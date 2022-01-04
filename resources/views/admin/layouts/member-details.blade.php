@extends('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
  <h1  style="text-align:center;"><i class="fa fa-angle-right">Information Details</i></h1>
            </section>

<section class="panel">
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
                <ul class="pricing" style="font-size:20px;">
                  <li style="font-size:20px;">Member Name:&emsp;&emsp;{{$lists->name}}</li>
                  <li style="font-size:20px;">Member ID:&emsp;&emsp;{{$lists->member_id}}</li>
                 <li style="font-size:20px;">NID Number:&emsp;&emsp;{{$lists->voter_id}}</li>
                  <li style="font-size:20px;">Account Number:&emsp;&emsp;{{$lists->account_number}}</li>

                  <li style="font-size:20px;">Date of Birth:&emsp;&emsp;{{$lists->dob}}</li>
                  <li style="font-size:20px;">Email Address:&emsp;&emsp;</li>
                  <li style="font-size:20px;">Address:&emsp;&emsp;{{$lists->address}}</li>
                </ul>
              </div>
@endforeach
@foreach ($me as $mes )
<li>Total Amount:{{$mes->amount}}</li>
@endforeach



          </div>
        </div></div>
         </section>
         <section class="panel">
    <div class="panel-body" >
        <div style="margin:43px; text-align:center;">

             <a href="#" class="btn btn-theme" onclick="printDiv('printableArea')">Print Now</a>
              <a class="btn btn-theme" href="{{route('admin.members.list'); }}"> Return Back</a>
<section>
            </div>




</div>





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
