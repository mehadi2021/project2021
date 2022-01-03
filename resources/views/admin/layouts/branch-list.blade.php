@extends ('admin.master')
@section('content')

<div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                    <form action="{{ route('admin.members.search') }}" class="pull-right mail-src-position" Method="GET">
                      <div class="input-append">
                        <input type="number"  name="search" class="form-control " placeholder="Search Member">
                        <br>
                       <button type="submit" class="btn btn-info">Submit</button>
                      </div>
                    </form>

    <!-- Button trigger modal -->
    <h1 class="modal-title text-warning"  style="color:black;text-align:center;"> Branch  Details</h1>
<div class=" text-start">
<a href="{{route('admin.branch.add') }}" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Branch
</a>
</div>
   </header>
            </section>
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
        <th scope="col">Branch Name</th>
        <th style="text-align:center;" scope="col">Action</th>
      </tr>
    </thead>
<tbody>
  @foreach($branches as  $key=>$branch)
    <tr>
    <td>{{ $key+1 }}</td>
    <td>{{ $branch->name }}</td>

    <td style="text-align:center;"> <a class="btn btn-info" href="" role="button">details</a>
        <a class="btn btn-primary" href="" role="button">edit</a>
        <a onclick="return confirm('Are You Sure?')" class="btn btn-danger" href="" role="button">delete</a></td>

    </tr>
@endforeach

</tbody>
  </table>
</div>

@endsection
