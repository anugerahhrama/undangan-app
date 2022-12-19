@extends('admin.base.base')

@section('content')

<div class="content-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Home</li>
                    <li class="breadcrumb-item active">Data Tema</li>
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
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id Tema</th>
                                    <th>Nama Tema</th>
                                    <th>Tema</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1 ?>
                                @forelse ($datas as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_tema }}</td>
                                        <td>{{ $data->tema }}</td>
                                        <td class="lg:grid-cols-2">
                                            <form action="{{ route('tema.destroy', $data->id) }}" method="POST">
                                            <a href="{{ route('tema.edit', $data->id) }}" class="btn btn-warning text-white"><i class="bi bi-pen"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <input  type="hidden" name="_method" value="DELETE">
                                            <button type="submit" data-judul="{{ $data->nama_tema }}" class="btndelete btn btn-danger text-white"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                <div class="alert alert-warning" role="alert">
                                    Tidak ada data
                                </div>
                            @endforelse
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
$('.btndelete').click(function(event) {
    var form = $(this).closest('form');
    var name = $(this).data('name');
    var judul = $(this).attr('data-judul');
    event.preventDefault();

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Apakah Anda Yakin Akan Menghapus ' + judul + '?',
        text: "Anda Tidak Akan Bisa Memulihkan Data Ini !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit(),
            swalWithBootstrapButtons.fire(
            'Deleted!',
            'Data Anda Berhasil Dihapus.',
            'success'
            )
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelled',
            judul +' Aman :)',
            'error'
            )
        }
    })
});
</script>

@endsection