@extends ('admin.master')


@section('content')



        <div class="row mt">
          <div class="col-lg-12">
            <section class="panel">
                <div class="panel-body">


               <div class="col-md-10 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">


                  <div class="x_content">
                    <br />
                    <form action="" class="form-horizontal form-label-left"  method="post">
 @csrf

                      <div class="form-group row">

                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Account Opening Date</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text"  name='date' class="form-control" placeholder=" Enter Your Account Opening Date" data-inputmask="'mask': '99/99/9999'">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Member ID</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name='member id'  class="form-control" placeholder=" Enter your Member Id" data-inputmask="'mask' : '(999) 999-9999'">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Center</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" name='center'  class="form-control" Placeholder=" Enter Your Center"   data-inputmask="'mask': '99-999999'">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>

                                           <div class="ln_solid"></div>


                    </div>

                </div>

            </div>


                                <div class="col-md-10 col-sm-12  ">
                                    <div class="x_panel">
                                      <div class="x_title">
                                        <h2>Personal Information</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                          </li>
                                          <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                          </li>
                                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                                          </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                      </div>
                                      <div class="x_content">
                                        <br />


                                          <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Member Name</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                              <input type="text" name='member_name'  class="form-control"  placeholder=" Enter Your Member Name"data-inputmask="'mask': '99/99/9999'">
                                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Father/Husband Name</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                              <input type="text" name='h_name'  class="form-control" placeholder=" Enter Your Father/Husband Name"  data-inputmask="'mask' : '(999) 999-9999'">
                                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Mother Name</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                              <input type="text" name='mothe_ name' class="form-control" Placeholder=" Enter Your Mother Name" data-inputmask="'mask': '99-999999'">
                                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Date of Birth</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                              <input type="text" name='birth'  class="form-control"Placeholder="Enter Your Date Of Birth"  data-inputmask="'mask' : '****-****-****-****-****-***'">
                                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Mobile Number</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                              <input type="text"  name='phone' class="form-control" Placeholder="Enter Mobile Number"data-inputmask="'mask' : '99-99999999'">
                                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Mobile Number(ligel gurdiance)</label>
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                              <input type="text" name='g_phone'  class="form-control"Placeholder="Enter Mobile Number(Ligel Gurdiance)"data-inputmask="'mask' : '9999-9999-9999-9999'">
                                              <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                            </div>
                                          </div>
                                          <div class="ln_solid"></div>


                      <div class="form-group row">
                        <div class="col-md-9 offset-md-3">

                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
@endsection
