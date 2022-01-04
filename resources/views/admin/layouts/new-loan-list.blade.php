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

                    <h1  style="text-align:center;"><i class="fa fa-angle-right">Add New Loan</i></h1>

<a href="{{ route('admin.new.create') }}" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Loan
</a>
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


 <div class="content-panel">
              <table class="table">
                <thead>
                  <tr>
          <th scope="col">#</th>
        <th scope="col">Loan Name</th>
        <th scope="col">Amount</th>
         <th scope="col">Time</th>
        <th scope="col">Rate</th>
        <th scope="col">Interest</th>
        <th scope="col">EMI</th>
        <th  scope="col">Action</th>
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
