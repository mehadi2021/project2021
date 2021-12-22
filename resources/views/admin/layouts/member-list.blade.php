@extends('admin.master')
@section('content')


    <!-- Button trigger modal -->
    <h1 class="modal-title text-warning"  style="color:black;text-align:center;"> Member  Details</h1>
<div class=" text-start">
<a href="{{route ('admin.members.add') }}" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add member
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
        <th scope="col">Member ID</th>
        <th scope="col">Account no</th>
         <th scope="col">phn_no</th>
        <th scope="col">Branch Name</th>
        <th style="text-align:center;" scope="col">Action</th>
      </tr>
    </thead>
<tbody>
    @foreach($list  as  $key=>$news)
    <tr>

    <td>{{ $key+1 }}</td>
    <td>{{ $news->user_id}}</td>
    <td>{{ $news->account_no}}</td>
    <td>{{ $news->phon_no}}</td>
    <td>{{ $news->branch}}</td>

    <td style="text-align:center;"> <a class="btn btn-info" href="{{route('admin.members.details',$news->id)}}" role="button">details</a>
        <a class="btn btn-primary" href="{{ route('admin.members.edit',$news->id) }}" role="button">edit</a>
        <a onclick="return confirm('Are You Sure?')" class="btn btn-danger" href="{{ route('admin.members.delete',$news->id)}}" role="button">delete</a></td>

    </tr>

     @endforeach

</tbody>
  </table>
</div>

@endsection
