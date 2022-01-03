@extends ('admin.master')
@section('content')

     <h1 class="modal-title text-warning"  style="color:black;text-align:center;">Add New Member</h1>
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




<form action="{{route('admin.members.store')}}" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">
 @csrf
    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Member Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="name" class="form-control" required placeholder=" Enter Your member id" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>



   <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Member ID</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="member_id" class="form-control" required placeholder=" Enter Your member id" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Date of Birth</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="Date" name="dob"  class="form-control"  required placeholder=" Enter your Date Of Birth" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>

      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Address</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="address" class="form-control" required  placeholder=" Enter Your Account Address" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Gender</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                   <select class="form-control" name="gender" id=""   aria-label="Default select example" required>
                        <option value="Null" >select from here</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                       </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Voter ID</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="Number"  name="voter_id" class="form-control"  required placeholder=" Enter Your Voter Id" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone Number</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="Number"  name="phon_no"  class="form-control" required placeholder=" Enter Your Phone Number" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>



    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Account Number</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="Number"  name="account_no"  class="form-control" required  placeholder=" Enter Your Account Number" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Branch Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">

                      <select class="form-control" name="branch" id=""   aria-label="Default select example" required>
  <option value="Null" >select from here</option>
                        @foreach($branches as $branch)

                       <option value="{{ $branch->name }}">{{ $branch->name }}</option>
@endforeach
                      </select>

                        </div>
    </div>



    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Upload Image</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="file" name="members_image"  class="form-control"  required data-inputmask="'mask': '99/99/9999'">
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
