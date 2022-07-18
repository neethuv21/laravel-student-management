<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="\css\style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <title>Student Website</title>
    <style type="text/css">
      *{
        
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.bg{
  background-color: gray;
}
    </style>
  </head>
  <body>
    
<nav class="navbar navbar-expand-md bg">
  
    <a class="navbar-brand   fs-3 ms-4 text-white  fw-bold " href="#">SBH SCHOOL</a>
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="btn">
      <ul class="navbar-nav ms-auto">
        
        <li class="nav-item">
          <a href="\studentlogout" class="nav-link mx-4 fs-5 text-white"><i class="bi bi-box-arrow-in-left"> LogOut</i></a>
        </li>
      </ul>
    </div>
  </nav>



  <!--Table-->
  <center>
    <h2  style="margin-top:50px; font-style: italic;color: gray;">Timetable</h2>
<table class="table table-striped w-auto" style="margin-top: 10px;height: 430px;">

  <!--Table head-->
  <thead style="text-align: center;">
    <tr>
      <th style="color:gray;">Sl No.</th>
     
      <th style="color:gray;">Class</th>
      <th style="color:gray;">Timetable</th>
     
      
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody style="text-align: center;">
    @foreach($result as $value)   
    @if($value->status=='approveed') 
    <tr class="table" style="background-color:gray;">
      <th scope="row" >{{$value->id}}</th>
      
  <td style="font-weight: 600;">{{$value->class}}</td>
  
 
 <td >
   <img src="/uploadnote/{{$value->tmetble}}" height="50px" width="50px" alt="" /> 
  </td>    
     
    </tr>
    @endif
    @endforeach
  </tbody>
  <!--Table body-->


</table>
</center>


<footer class="bg text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">SBH School.com</a>
  </div>
  <!-- Copyright -->
</footer>

   
  </body>
</html>