@extends('admin.master')
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
    <h1 class="modal-title text-warning"  style="color:black;text-align:center;">  News Details</h1>
<div class=" text-start">
<a href="{{route ('admin.news.add') }}" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
   Add News
</a>
</div>
   </header>
            </section>

 <div class=container>
<table class="table table-striped table-bordered border-primary bg-light table-cell-padding-.2rem" style="margin-top:10px;">

    <thead class= "table-dark">
      <tr>
           <th scope="col">#</th>
        <th scope="col">News</th>
         <th scope="col">Action</th>
      </tr>
    </thead>
<tbody>
    @foreach($list  as  $key=>$news)
    <tr>
    <td>{{ $key+1 }}</td>
    <td>{{ $news->news_description }}</td>
    <td><a class="btn btn-info" href="" role="button">edit</a>
    <a onclick="return confirm('Are You Sure?')" class="btn btn-danger" href="{{ route('admin.news.delete',$news->id) }}" role="button">delete</a></td>
    </tr>
     @endforeach

</tbody>
  </table>
</div>
@endsection
