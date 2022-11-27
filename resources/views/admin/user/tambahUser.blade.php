@extends('admin.base.base')

@section('content')

<div class="content-header">
  <div class="container">
    <div class="row mx-3">
      <div class="col-sm-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Home</li>
          <li class="breadcrumb-item active">Data User</li>
          <li class="breadcrumb-item active">Tambah User </li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content pb-5">
  <div class="container">
    <div class="row mx-3">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <form action="{{ route('user.index') }}" class="ms-3" method="POST">

              @csrf
              @method('POST')
              <div class="row mb-4 mt-4">
                <div class="col-md-6">
                  <div class="form-outline">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" id="name" class="form-control" name="nama"/>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-outline">
                    <label for="nohp" class="form-label">No. Hp</label>
                     <input type="number" id="nohp" class="form-control" name="no_hp"/>
                  </div>
                </div>
              </div>

              <div class="row mb-4 mt-2">
                <div class="col-md-6">
                  <div class="form-outline">
                    <label for="email" class="form-label">E-mail</label>
                     <input type="email" id="email" class="form-control" name="email"/>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-outline">
                    <label for="alamat">Password</label>
                    <input type="password" id="password" class="form-control" name="password"/>
                  </div>
                </div>
              </div>

              <div class="row mb-4 mt-2">
                <div class="col-md-12">
                  <div class="form-outline">
                    <label for="alamat" class="form-label">Alamat</label>
                     <input type="text" id="alamat" class="form-control" name="alamat"/>
                  </div>
                </div>
              </div>

              <input type="hidden" value="user" name="role">

              <div class="mb-4 text-center">
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary rounded-3 px-5">Tambah</button>
                    <a href="{{ route('user.index') }}" class="btn btn-warning text-white rounded-3 px-5">Kembali</a>
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