
	<style type="text/css">
		@media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}

 *{
        
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.bg{
  background-color: gray;
}
	</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  
    	@extends('teacherheader');
    @section('teacherbody');
    	<section class="h-100 h-custom" style="background-color: black;margin-left:200px;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
          	<center>
             <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Add Syllabus</h3>
             </center>


           <form method="post" enctype="multipart/form-data" action="\addslbsaction">
		        @csrf
            	<div class=" mb-4" style="margin-left: 30px;">
              	 <label for="exampleDatepicker1" class="form-label fw-bold">Choose a Class:</label>

                <select name="class" class="select" style="width:250px;margin-left: 15px;">
                  <option value="" disabled>Class</option>
                  <option value="I">I</option>
                  <option value="II">II</option>
                    <option value="IV">IV</option>
                 
                 
                </select>

              </div>
              
               <div class=" mb-4" style="margin-left: 30px;">
              	 <label class="fw-bold"  >Add Syllabus</label>

               <input type="file" name="slbs" style="width:250px;margin-left: 35px;">

              </div>
              
              

              

              

              <button type="submit" name="login" class="btn btn-secondary btn-lg mb-1" style="margin-left:180px;">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


  
