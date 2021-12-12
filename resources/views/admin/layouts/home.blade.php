@extends('admin.master')
@section('content')


<h1 style="text-align: center; color:black;">Wellcome to our admin panel</h1>


<div class="row content-panel" style="margin-left:10px;">

                          <div class="row mt" >
          <div class="col-lg-14">


					<div class="col-md-3 widget states-mdl" style=" background-color: #263544; color:white;  padding-top:10px; text-align:center; margin:40px;">
		                       <div class="count-area-content">
                  <div class="count-digit">{{$member}}</div>
                  	<div class="stats-left ">
							<h5>Total</h5>
							<h4>Member</h4>
						</div>
                        </div>
                </div>     	
					
					<div class="col-md-3 widget states-mdl"  style=" background-color: #263544; color:white; padding-top:10px;   text-align:center; margin:40px;">
                                               2400
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Amount</h4>
						</div>
						</div>

					</div>
					<div class="col-md-3 widget states-last"  style=" background-color: #263544; color:white; padding-top:10px;  text-align:center;  margin:40px;">
				4
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Loan Request</h4>
						</div>

					</div>

				</div>


                          </div>


                          </div></div>

					@endsection
