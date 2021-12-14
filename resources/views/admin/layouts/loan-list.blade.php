@extends('admin.master')
@section('content')

<h1 class="modal-title text-warning"  style="color:black;text-align:center;"> Loan Request Details</h1>
<div class=" text-start">
<a href="{{route ('admin.loan.add') }}" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add loan request
</a>
</div>




<table class="table table-striped table-bordered border-primary bg-light table-cell-padding-.2rem" style="margin-top:10px;">
    <thead class= "table-dark">
      <tr>
        <th scope="col"> member  </th>
        <th scope="col"> loan_amount  </th>
        <th scope="col"> loan_interest</th>
        <th scope="col">payment_term</th>
        <th scope="col">total_amount_interest</th>
        <th scope="col">payment_schedule</th>
        <th scope="col">due_date</th>
            <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($list as $key=>$data)
{{-- @dd($data->loanMember->Memberuser); --}}
        <tr>
              <th scope="row">
          {{$data->member_id}}</th>
           <td>{{$data->loan_amount}}</td>
           <td>{{$data->loan_interest}}</td>
           <td>{{$data->payment_term}}</td>
           <td>{{$data->total_amount_interest}}</td>
           <td>{{$data->payment_schedule}}</td>
           <td>{{$data->due_date}}</td>
            <td><a class="btn btn-primary" href="" role="button">edit</a>
             <a class="btn btn-danger" href="{{ route('admin.loan.delete',$data->id) }}" role="button">delete</a></td>


        </tr>
        @endforeach


  </table>
    @endsection
