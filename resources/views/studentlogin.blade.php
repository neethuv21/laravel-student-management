<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<style type="text/css">
	.gradient-custom {
/* fallback for old browsers */
background: lavender;

/* Chrome 10-25, Safari 5.1-6 */
/*background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

 W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ 
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))*/

}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<body>





	<section class="vh-150 gradient-custom">
  <div class="container py-5 h-25">
     
    <div class="row d-flex justify-content-center align-items-center h-25 ">
       <div class="col-12 col-md-4 col-lg-6 col-xl-5"> 
        <div class="card  text-white" style="border-radius: 1rem;background-color: gray;">
          <div class="card-body p-4 text-center">

            <div class="mb-md-4 mt-md-4 pb-3">

              <h2 class="fw-bold mb-2 text-uppercase">Student Login</h2>
              <p class="text-white mb-5">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
              	<form action="/sloginaction" method="post" >
	           @csrf
                <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

             
              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              @if(session('error'))
          <p style="color: red;">{{session('error')}}</p>
          @endif
        </form>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0 pb-5 "  >Don't have an account? <a href="\sregister" class="text-white fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
</body>
</html>