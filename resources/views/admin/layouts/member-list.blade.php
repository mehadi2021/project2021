@extends('admin.master')
@section('content')


    <!-- Button trigger modal -->
<div class=" text-start">
<a href="{{route ('admin.members.add') }}" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add member
</a>
</div>


<div class=container >
<table class="table table-striped table-bordered border-primary bg-light table-cell-padding-.2rem"style="margin-top:20px;" >

    <thead class= "table-dark">
      <tr>
          <th scope="col">#</th>
        <th scope="col">Name</th>
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
        <a class="btn btn-primary" href="" role="button">edit</a>
        <a class="btn btn-danger" href="{{ route('admin.members.delete',$news->id)}}" role="button">delete</a></td>

    </tr>

     @endforeach

</tbody>
  </table>
</div>

@endsection
