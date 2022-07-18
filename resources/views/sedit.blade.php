
	<style type="text/css">
		.gradient-custom {
/* fallback for old browsers */
background: gray;
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
    

		<section class="vh-100 gradient-custom" >

  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            @foreach($result as $value)
         <form action="/seditaction/{{$value->id}}" method="post">
	      @csrf

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text"  name="name" class="form-control form-control-lg"  value="{{$value->name}}"/>
                    <label class="form-label" > Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="email"  name="email" class="form-control form-control-lg" value="{{$value->email}}" />
                    <label class="form-label" >Email</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="password" class="form-control form-control-lg" name="password" value="{{$value->password}}"  />
                    <label  class="form-label">Password</label>
                  </div>

                </div>
                
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text"  name="phone" value="{{$value->phone}}" class="form-control form-control-lg" />
                    <label class="form-label" >Phone Number</label>
                  </div>

                </div>
               
              </div>

             

              <div class="mt-4 pt-2">
                <input class="btn btn-secondary btn-lg" type="submit" value="Update" />
              </div>

            </form>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	
    
 		