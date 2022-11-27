@extends('admin.base.base')

@section('content')
  <div class="content-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Home</li>
            <li class="breadcrumb-item active">Data User</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content pb-5 pt-4">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="px-3 pt-3">
              <a href="tambah-admin" class="btn btn-primary">Tambah</a>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id User</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>No. Hp</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($datas as $data)
                      <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->no_hp }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->role }}</td>
                        <td>
                          <form action="{{ route('user.destroy', $data->id) }}" method="POST">
                          <a href="{{ route('user.edit', $data->id) }}" class="btn btn-warning text-white"><i class="bi bi-pen"></i></a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger text-white"><i class="bi bi-trash"></i></button>
                          </form>
                        </td>
                      </tr>
                  @empty
                      <h1>data tidak ada</h1>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
