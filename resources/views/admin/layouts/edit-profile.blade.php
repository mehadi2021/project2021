@extends ('admin.master')
@section('content')

     <h1 class="modal-title text-warning"  style="color:black;text-align:center;">Edit Administrator Info</h1>
   <section class="panel">

                <div class="panel-body">



<form action="" class="form-horizontal form-label-left"  method="post" enctype="multipart/form-data">
 @csrf

   <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Name</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="user_id" class="form-control" placeholder=" Enter Your user id" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

    <div class="form-group row">
         <label class="control-label col-md-3 col-sm-3 col-xs-3">Address</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                     <input type="text" name="address"  class="form-control" placeholder=" Enter your Member Id" data-inputmask="'mask' : '(999) 999-9999'">
                </div>
     </div>

      <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Gmail</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="gmail" class="form-control" placeholder=" Enter Your Account Opening Date" data-inputmask="'mask': '99/99/9999'">
                </div>
    </div>

     <div class="form-group row">

         <label class="control-label col-md-3 col-sm-3 col-xs-3">Description</label>
                 <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="text"  name="voter_id" class="form-control" placeholder=" Enter Your Account Opening Date" data-inputmask="'mask': '99/99/9999'">
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
        <a href={{ route('admin.profile') }} class="btn btn-success">Cancel</a>
         </div>
     </div>

</form>

@endsection
