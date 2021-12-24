@extends ('admin.master')
@section('content')

     <h1 class="modal-title text-warning"  style="color:black;text-align:center;">Add New Branch</h1>
   <section class="panel">

                <div class="panel-body">
                    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<div style="margin-top: 10px;">

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




<form action="{{ route('admin.branch.store') }}" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">
 @csrf

   <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Add Branch</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="name" class="form-control" required placeholder=" Enter Your new branch name" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>
    <div class="form-group row">
         <div class="col-md-9 offset-md-3">

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="submit" class="btn btn-success">Cancel</button>
         </div>
     </div>

</form>


    @endsection
