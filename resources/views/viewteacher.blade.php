@extends('adminheader');
@section('adminbody');
<!--Table-->
	
		<h2  style="margin-top:10px; font-style: italic;margin-left: 480px;">Teacher Details </h2>
<table class="table table-striped w-auto" style="height: 400px;margin-left: 400px;">

  <!--Table head-->
  <thead style="text-align: center;">
    <tr>
      <th>Sl No.</th>
     
      <th> Name</th>
      <th>Email</th>
      <th>Phone</th>
      
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
	
  
     
    </tr>
    @endforeach
  </tbody>
  <!--Table body-->


</table>
@endsection