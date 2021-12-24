@extends('admin.master')
@section('content')


    <!-- Button trigger modal -->
    <h1 class="modal-title text-warning"  style="color:black;text-align:center;"> Add New Loan</h1>
<div class=" text-start">
<a href="{{ route('admin.new.create') }}" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Loan
</a>
</div>
<br>
@if(session('success'))
    <div class="alert alert-success">
        {!!  session ('success')  !!}
    </div>
@endif

 @if(session('error'))
    <div class="alert alert-danger">
           { !! session('error') !! }
    </div>
@endif


<div class=container >
<table class="table table-striped table-bordered border-primary bg-light table-cell-padding-.2rem"style="margin-top:20px;" >

    <thead class= "table-dark">
      <tr>
          <th scope="col">#</th>
        <th scope="col">Loan Name</th>
        <th scope="col">Amount</th>
         <th scope="col">Time</th>
        <th scope="col">Rate</th>
        <th scope="col">Interest</th>
        <th scope="col">EMI</th>
        <th style="text-align:center;" scope="col">Action</th>
      </tr>
    </thead>
<tbody>
   @foreach($lists  as  $key=>$news)
    <tr>
     <td>{{ $key+1 }}</td>
    <td>{{ $news->name }}</td>
     <td>{{ $news->amount }}</td>
      <td>{{ $news->time }}</td>
       <td>{{ $news->rate }}</td>
        <td>{{ $news->interest }}</td>
         <td>{{ $news->emi }}</td>
    <td style="text-align:center;"> <a class="btn btn-info" href="" role="button">details</a>
        <a class="btn btn-primary" href="" role="button">edit</a>
        <a onclick="return confirm('Are You Sure?')" class="btn btn-danger" href="" role="button">delete</a></td>

    </tr>
        @endforeach

 

</tbody>
  </table>
</div>

@endsection
