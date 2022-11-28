@extends('admin.base.base')

@section('content')

    <div class="content-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Home</li>
                        <li class="breadcrumb-item active">Data Tema</li>
                        <li class="breadcrumb-item active">Tambah Tema</li>
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

                    <form action="{{ route('tema.index') }}" class="ms-3" method="POST">

                    @csrf
                    @method('POST')
                    <div class="row mb-4 mt-4">
                        <div class="col-md-12">
                            <div class="form-outline">
                                <label for="name" class="form-label">Nama Tema</label>
                                <input type="text" id="nama_tema" class="form-control" name="nama_tema"/>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4 mt-2">
                        <div class="col-md-12">
                            <div class="form-outline">
                                <label for="nohp" class="form-label">Tema</label>
                                <input type="text" id="tema" class="form-control" name="tema"/>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 text-center">
                        <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary rounded-3 px-5">Tambah</button>
                            <a href="{{ route('tema.index') }}" class="btn btn-warning text-white rounded-3 px-5">Kembali</a>
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
