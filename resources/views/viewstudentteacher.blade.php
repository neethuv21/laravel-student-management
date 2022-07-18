@extends('teacherheader');
@section('teacherbody');
<!--Table--><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <h2  style="margin-top:10px; font-style: italic;margin-left: 480px;">Time Table</h2>
<table class="table table-striped w-auto" style="height: 400px;margin-left: 450px;">

  <!--Table head-->
  <thead style="text-align: center;">
    <tr>
      <th>Sl No.</th>
     
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Password</th>
      
     <!--  <th style="color:purple;">Status</th> -->
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody style="text-align: center;">
    @foreach($result as $value)   
    <tr class="table" style="background-color:gray;">
      <th scope="row" >{{$value->id}}</th>
      
  <td style="font-weight: 600;">{{$value->name}}</td>
   <td style="font-weight: 600;">{{$value->email}}</td>
    <td style="font-weight: 600;">{{$value->phone}}</td>
     <td style="font-weight: 600;">{{$value->password}}</td>

  
     
    </tr>
    @endforeach
  </tbody>
  <!--Table body-->


</table>
@endsection