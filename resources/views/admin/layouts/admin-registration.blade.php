@extends ('admin.master')
@section('content')

     <h1 class="modal-title text-warning"  style="color:black;text-align:center;">Admin Registration</h1>
   <section class="panel">

                <div class="panel-body">



 <form action="{{route('user.registration')}}" method="post" enctype="multipart/form-data">
                    @csrf












 <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter User Name:</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="username" class="form-control" required placeholder=" Enter Your member id" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter User Email:</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="email"  class="form-control"  required placeholder=" Enter your Date Of Birth" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>

      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter User Password:</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="password" class="form-control" required  placeholder=" Enter Your Account Address" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>


     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter User Mobile:</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="Number"  name="mobile" class="form-control"  required placeholder=" Enter Your Voter Id" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Enter Your Role</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="role"  class="form-control" required placeholder=" Enter Your Phone Number" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>
    <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Upload Image</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="file" name="image"  class="form-control"  required data-inputmask="'mask': '99/99/9999'">
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
