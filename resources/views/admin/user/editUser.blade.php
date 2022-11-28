@extends('admin.base.base')

@section('content')

<div class="content-header">
  <div class="container">
    <div class="row mx-3">
      <div class="col-sm-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Home</li>
          <li class="breadcrumb-item active">Data User</li>
          <li class="breadcrumb-item active">Edit User</li>
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

            <form action="{{ route('user.update', $user->id) }}" method="POST">

              @csrf
              @method('PUT')
              <div class="row mb-4 mt-4">
                <div class="col-md-6">
                  <div class="form-outline">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" id="name" class="form-control" value="{{ $user->nama }}" name="nama"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-outline">
                    <label for="nohp" class="form-label">No. Hp</label>
                    <input type="text" id="nohp" class="form-control" value="{{ $user->no_hp }}" name="no_hp"/>
                  </div>
                </div>
              </div>

              <div class="row mb-4 mt-2">
                <div class="col-md-6">
                  <div class="form-outline">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" id="email" class="form-control" value="{{ $user->email }}" name="email"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-outline">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" class="form-control" value="{{ $user->alamat }}" name="alamat" />
                  </div>
                </div>
              </div>

              <div class="row mb-4 mt-2">
                <div class="col-md-12">
                  <div class="form-outline">
                    <label for="email" class="form-label">Status</label>
                    <select class="form-select" name="role" id="validationTooltip04"> 
                      <option selected disabled></option>
                      <option value="user">User</option>
                      <option value="admin">Admin</option>
                    </select>
                  </div>
                </div>
              </div>

              <input type="hidden" id="nohp" class="form-control" value="{{ $user->password }}" name="password"/>
              {{-- <input type="hidden" name="role" value="{{ $user->role }}"> --}}

              <div class="mb-4 text-center">
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary rounded-3 px-5">Edit</button>
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