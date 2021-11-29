@extends ('admin.master')
@section('content')

     <h1 class="modal-title text-warning"  style="color:black;text-align:center;">Add New Member</h1>
   <section class="panel">

                <div class="panel-body">



<form action="{{route('admin.members.store')}}" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">
 @csrf

   <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">User ID</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="user_id" class="form-control" placeholder=" Enter Your user id" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">date of birth</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="dob"  class="form-control" placeholder=" Enter your Member Id" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>

      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Address</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="address" class="form-control" placeholder=" Enter Your Account Opening Date" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Gender</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                   <select class="form-control" name="gender" id="" aria-label="Default select example"required>
                        <option value="Null" >select from here</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                       </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Voter id</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="voter_id" class="form-control" placeholder=" Enter Your Account Opening Date" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Phone_number</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="phon_no"  class="form-control" placeholder=" Enter Your Account Opening Date" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>



    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Account nor</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="account_no"  class="form-control" placeholder=" Enter Your Account Opening Date" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Branch Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="branch"  class="form-control" placeholder=" Enter Your Account Opening Date" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>



    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Upload Image</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="file" name="members_image"  class="form-control" data-inputmask="'mask': '99/99/9999'">
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
