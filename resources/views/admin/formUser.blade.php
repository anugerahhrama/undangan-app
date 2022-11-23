@extends('admin.base.base')

@section('content')

<div class="content-header">
  <div class="container">
    <div class="row mx-3">
      <div class="col-sm-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard </li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content pb-5 pt-4">
  <div class="container">
    <div class="row">
      <div class="text-center p-3">
        <h1>Tambah User</h1>
      </div>
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form action="">
              <div class="row mb-4 mx-2 mt-2 px-5">
                <div class="col">
                  <div class="form-outline">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" id="name" class="form-control" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <label for="nohp" class="form-label">No. Hp</label>
                    <input type="text" id="nohp" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="row mb-4 mx-2 mt-2 px-5">
                <div class="col">
                  <div class="form-outline">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" id="email" class="form-control" />
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="row px-5 mx-4 mb-4">
                <label for="alamat">Alamat</label>
                <textarea type="text" id="alamat" class="form-control"></textarea>
              </div>
              <div class="px-5 mx-4 mb-4">
                <div class="row">
                  <div class="col-10"></div>
                  <div class="col-2">
                <button type="submit" class="btn btn-primary rounded-3" style="width: 128px;">Tambah</button>
                </div>
              </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection