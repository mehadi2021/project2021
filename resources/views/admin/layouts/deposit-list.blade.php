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

    <h1  style="text-align:center;"><i class="fa fa-angle-right"> Deposit List</i></h1>

<a href="" class="btn btn-info " > Add New Deposit</a>
 </header>
            </section>


<div class="content-panel">
              <table class="table">
                <thead>
                  <tr>
        <th scope="col">#</th>
        <th scope="col"> Member  ID</th>
        <th scope="col"> Member Name  </th>
        <th scope="col"> Account No</th>
        <th scope="col">Branch</th>
        <th scope="col">Method</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
            <th scope="col">Transaction</th>
           <th>Action</th>

      </tr>
    </thead>
    <tbody>
@foreach($deposits as $key=>$deposit)
{{-- @dd($data->loanMember->Memberuser); --}}
        <tr>
         <td>{{$key+1}}</td>
          <td>{{$deposit->member_id}}</td>
           <td>{{$deposit->member_name}}</td>
           <td>{{$deposit->account_no}}</td>
           <td>{{$deposit->branch}}</td>
           <td>{{$deposit->method}}</td>
           <td>{{$deposit->amount}}</td>
           <td>{{$deposit->date}}</td>
           <td>{{$deposit->transaction}}</td>




            <td><a button class="btn btn-success btn-xs" href=""><i class=" fa fa-check"></i></button></a>
                 <a button class="btn btn-primary btn-xs" href=""><i class="fa fa-pencil"></i></button></a>
                <a onclick="return confirm('Are You Sure?')" button class="btn btn-danger btn-xs"   href=""><i class="fa fa-trash-o"></i></button></a>
            </td>

        </tr>
        @endforeach
</table>
</div>
    @endsection
