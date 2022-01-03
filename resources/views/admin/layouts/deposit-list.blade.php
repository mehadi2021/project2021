@extends('admin.master')
@section('content')




<div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Member">
                        <br>
                       <button a href="" class="btn btn-info "> serach</button></a>
                      </div>
                    </form>

    <!-- Button trigger modal -->
  <h1 class="modal-title text-warning"  style="color:black;text-align:center;">Deposit List</h1>
<div class=" text-start">
<a href="" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Deposit
</a>
</div>
   </header>
            </section>
</div>
<br>

<table class="table table-striped table-bordered border-primary bg-light table-cell-padding-.2rem" style="margin-top:10px;">
    <thead class= "table-dark">
      <tr>
        <th scope="col"> Member  ID</th>
        <th scope="col"> Member Name  </th>
        <th scope="col"> Account No</th>
        <th scope="col">Branch</th>
        <th scope="col">Method</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
            <th scope="col">Transaction</th>
      </tr>
    </thead>
    <tbody>
@foreach($deposits as $key=>$deposit)
{{-- @dd($data->loanMember->Memberuser); --}}
        <tr>
              <th scope="row">
          {{$deposit->member_id}}</th>
           <td>{{$deposit->member_name}}</td>
           <td>{{$deposit->account_no}}</td>
           <td>{{$deposit->branch}}</td>
           <td>{{$deposit->method}}</td>
           <td>{{$deposit->amount}}</td>
           <td>{{$deposit->date}}</td>
           <td>{{$deposit->transaction}}</td>
            <td><a class="btn btn-primary" href="" role="button">edit</a>
             <a onclick="return confirm('Are You Sure?')" class="btn btn-danger" href="" role="button">delete</a></td>


        </tr>
        @endforeach
</table>
    @endsection
