  @extends('base.base');

  @section('content')
    <div class="col-xl-5 mt-5">
      <div class="card rounded-5 bayangan">
        <div class="row g-0">
          <div class="col">
            <div class="card-body mt-3 mb-4 p-md-5 mx-sm-5">
              <div class="text-center my-4">
                <h4 class="title-register">LOGIN</h4>
              </div>
              <form action="">
                <div class="form-outline mb-3">
                  <input type="email" class="form-control rounded-4 shadow-sm bg-input" placeholder="E-Mail" />
                </div>
                <div class="form-outline mb-3">
                  <input type="password" class="form-control rounded-4 shadow-sm bg-input" placeholder="Password" />
                </div>
                <div class="pt-3 mb-5 text-center">
                  <button class="btn btn-primary btn-register rounded-pill shadow" style="width: 120px;">LOGIN</button>
                </div>                      
              </form>
              <div class="text-center">
                <small class="text-register">Dont have an account? <a href="register">Register</a></small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection