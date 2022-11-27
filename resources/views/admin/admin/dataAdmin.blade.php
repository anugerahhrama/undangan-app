@extends('admin.base.base')

@section('content')

  <div class="content-header">
    <div class="container">
      <div class="row mx-3">
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Home</li>
            <li class="breadcrumb-item active">Data Admin</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content pb-5 pt-4">
    <div class="container">
      <div class="row">
        <div class="text-center p-3">
          <h1>Data Admin</h1>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="px-3 pt-3">
              <a href="/tambah-admin" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id Admin</th>
                    <th>Nama Admin</th>
                    <th>Email</th>
                    <th>No. Hp</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>U001</td>
                    <td>Samsudin</td>
                    <td>samsudinsakti@gmail.com</td>
                    <td>0909090909</td>
                    <td>Blitar</td>
                    <td>
                      <a href="/edit-admin" class="btn btn-warning text-white">Edit</a>
                      <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
