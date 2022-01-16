@extends('website.pages.service')
@section('mehadi')
  <article  style="margin-left:30px;">
    <h4  style="text-align:center;">Member profile</h4>
                 <br>
<thead class= "table-dark">
      <tr>
          <th scope="col">#</th>
        <th scope="col">Member ID</th>
        <th scope="col">Account no</th>
         <th scope="col">phn_no</th>
        <th scope="col">Branch Name</th>
        <th style="text-align:center;" scope="col">Action</th>
      </tr>
    </thead>
<tbody>

    @foreach($list  as  $key=>$news)
    @if({{auth()->user()->id}}==1}})

  <td>{{ $news->member_id}}</td>
    <td>{{ $news->amount }}</td>
    <td> </td>
      </tr>
      @endif







     @endforeach

</tbody>
  </table>
</div>
@endsection
