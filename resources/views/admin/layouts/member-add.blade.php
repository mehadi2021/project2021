@extends('admin.master')
@section('content')

<body style="background-image:url(/img/star.jpg); background-repeat:no-repeat;background-size:100 100%;background-attachment:fixed">



    <!-- Button trigger modal -->
<div class=" text-start">
<a href="{{route ('admin.members.add') }}" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add member
</a>
</div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-warning" id="exampleModalLabel">Add new member</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        {{-- from start --}}

        <form method="post" action="" enctype="multipart/form-data" class="container">
        @csrf

        <div class="modal-body bg-info">

                <div class=" from-group">
                  <label for="exampleInputEmail1">Enter Name</label>
                  <input type="text" class="form-control"name="name" placeholder="Enter member name"required>

                </div>

               <div class=" from-group">
                  <label for="exampleInputEmail1">date of birth</label>
                  <input type="date" class="form-control"name="dob" placeholder="Enter birathday date"required>

                </div>
                <div class=" from-group">
                    <label for="exampleInputEmail1">Address</label>
                    <textarea type="text" class="form-control"name="address" placeholder="Enter Address here"required></textarea>

                  </div>
                  <div class=" from-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <select class="form-control" name="gender" id="" aria-label="Default select example"required>
                        <option value="Null" >select from here</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>

                  </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Voter id</label>
                    <input type="number" class="form-control"name="voter_id" placeholder="Enter voter id"required>

                  </div>
                  <div class=" from-group">
                    <label for="phon_no">Phone_number</label>
                    <input type="tel" class="form-control" name="phon_no" placeholder="Enter phn_no"required>
                </div>
                <div class=" from-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="email" class="form-control"name="email" placeholder="name@example.com"required>

                </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Account no</label>
                    <input type="number" class="form-control"name="account_no" placeholder="Enter Account number"required>
                  </div>

                  <div class=" from-group">
                    <label for="exampleInputEmail1">Branch Name</label>
                    <input type="text" class="form-control"name="branch" placeholder="Enter Branch Name"required>

                  </div>
                  <div class="from-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your Password" required>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Upload Image</label>
                    <input name="members_image" type="file" class="form-control"required>
               </div>

        </div>
                <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>


  {{-- search option --}}
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>

  <div class="col-md-4">
    <form action="" method="get">
        @csrf
    <input name="search" type="text" placeholder="Search" class="form-control">
    <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

{{-- <div class="title text-center mb-3 bg-info text-dark">
   <h3 class="font-weight-bolder p-1 m-5">Member List</h3>

</div> --}}


    {{-- table --}}
    <div class=container>
<table class="table table-striped table-bordered border-primary bg-light table-cell-padding-.2rem">
    <thead class= "table-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Date of Birth</th>
        <th scope="col">Address</th>
        <th scope="col">Gender</th>
        <th scope="col">Voter id</th>
        <th scope="col">phn_no</th>
        <th scope="col">Email Address</th>
        <th scope="col">Account no</th>
        <th scope="col">Branch Name</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>


  </table>
</div>

</body>
@endsection
