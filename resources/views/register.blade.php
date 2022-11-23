@extends('base.base')

@section('content')
  <div div class="col-xl-8 mt-2">
    <div class="card rounded-5 text-black bayangan">
      <div class="row g-0">
        <div class="col-lg-7">
          <div class="card-body p-md-5 mx-md-4">
            <div class="text-center">
              <h4 class="mt-2 mb-3 pb-3 title-register">
                REGISTER
              </h4>
            </div>

            <form action="" class="ms-3">
              <div class="form-outline mb-3">
                <input type="text" id="name" class="form-control rounded-5 shadow-sm bg-input" style="width: 250px;" placeholder="Name"/>
              </div>
              <div class="form-outline mb-3">
                <input type="number" id="nohp" class="form-control rounded-5 shadow-sm bg-input" style="width: 250px;" placeholder="No. Hp"/>
              </div>
              <div class="form-outline mb-3">
                <input type="text" id="alamat" class="form-control rounded-5 shadow-sm bg-input" style="width: 250px;" placeholder="Alamat"/>
              </div>
              <div class="form-outline mb-3">
                <input type="email" id="email" class="form-control rounded-5 shadow-sm bg-input" style="width: 250px;" placeholder="E-Mail" />
              </div>
              <div class="form-outline mb-3">
                <input type="password" id="password" class="form-control rounded-5 shadow-sm bg-input" style="width: 250px;" placeholder="Password" />
              </div>
              <div class="ps-4 ms-5 pt-3 mb-5">
                <button class="btn btn-primary rounded-pill btn-register shadow" style="width: 105px;">DAFTAR</button>
              </div>
            </form>
            <div class="text-center">
              <small class="text-register">Already have an account? <a href="login">Login</a></small>
            </div>
          </div>
          
        </div>
        <div class="col-lg-5 pt-5 bg-register" style="border-radius: 0 2rem 2rem 0; border: none;">
          <div class="text-center pt-5 text-white">
            <img src="" alt="">
            <h4>Selamat Datang di</h4>
            <h3>WEBSITE KAMI</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection