@extends('user/dataUser/base/base')
  
@section('content')

<section class="pt-32 md:pt-36 min-h-screen">
    <div class="conteiner">
        <div class="w-full px-4 text-center">
            <div class="text-4xl text-rose-500 dark:text-rose-500 mx-auto text-center mb-16">
                <h1>Halaman Data Undangan</h1>
            </div>
            <a href="{{ route('tambah_undangan') }}">
                <button type="button" class="text-white bg-rose-500 hover:bg-rose-300 focus:ring-4 focus:ring-rose-500 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-rose-500 dark:hover:bg-rose-300 focus:outline-none dark:focus:ring-rose-500">
                    Tambah Undangan
                </button>
            </a>   
        </div>
    </div>

    <div class="container px-7 mb-12 text-center">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-2">
            <table class="w-full border mx-auto text-sm text-center text-rose-400 dark:text-rose-400">
                <thead class="text-xs bg-rose-500 text-white uppercase bg-rose-50 dark:bg-rose-500 dark:text-white">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            No
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Waktu
                        </th>
                        <th scope="col" class="py-3 px-6">
                            judul acara
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Tema
                        </th>
                        <th scope="col" class="py-3 px-6">
                            susunan acara
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Tamu
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Lihat Tema
                        </th>
                        <th scope="col" class="py-3 px-6">
                            action
                        </th>
                    </tr>
                </thead>
                <tbody class="text-rose-700 bg-rose-500 dark:bg-rose-500">
                    <?php $no=1 ?>
                    <?php
                    function tgl_indo($tanggal){
                        $bulan = array (
                            1 =>   'Januari',
                            'Februari',
                            'Maret',
                            'April',
                            'Mei',
                            'Juni',
                            'Juli',
                            'Agustus',
                            'September',
                            'Oktober',
                            'November',
                            'Desember'
                        );
                        $pecahkan = explode('-', $tanggal);
                        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                        }?>
                    @forelse($datas as $data)
                    <tr class="bg-white border-b hover:bg-rose-100">
                        <td class="py-4 px-6">
                            {{ $no++ }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->hari }} <br> <?= tgl_indo($data->tanggal) ?> 
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->judul_acara }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->nama_tema }}
                        </td>
                        <td class="py-4 px-6">
                            <a class="font-medium text-rose-700 dark:text-rose-700" href="{{ route('susunan_acara', $data->id) }}">
                                <button type="button" class="text-rose-700 bg-white border border-rose-500 focus:outline-none hover:bg-rose-500 focus:ring-4 hover:text-white focus:ring-rose-500 font-medium rounded-full text-sm px-5 py-2 dark:bg-white dark:text-rose-700 dark:border-rose-700 dark:hover:bg-rose-500 dark:hover:text-white dark:hover:border-rose-700 dark:focus:ring-rose-500">
                                    Susunan Acara
                                </button>
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <a class="font-medium text-blue-600 dark:text-blue-500" href="{{ route('tamu_undangan', $data->id) }}">
                                <button type="button" class="text-rose-700 bg-white border border-rose-500 focus:outline-none hover:bg-rose-500 focus:ring-4 hover:text-white focus:ring-rose-500 font-medium rounded-full text-sm px-5 py-2 dark:bg-white dark:text-rose-700 dark:border-rose-700 dark:hover:bg-rose-500 dark:hover:text-white dark:hover:border-rose-700 dark:focus:ring-rose-500">
                                    Tamu
                                </button>
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <a class="font-medium text-rose-600 dark:text-rose-500" href="{{ route('lihat_tema', ['id' => $data->id, 'id_tema' => $data->id_tema ] ) }}">
                                <button type="button" class="text-rose-700 bg-white border border-rose-500 focus:outline-none hover:bg-rose-500 focus:ring-4 hover:text-white focus:ring-rose-500 font-medium rounded-full text-sm px-5 py-2 dark:bg-white dark:text-rose-700 dark:border-rose-700 dark:hover:bg-rose-500 dark:hover:text-white dark:hover:border-rose-700 dark:focus:ring-rose-500">
                                    Tema
                                </button>
                            </a>
                        </td>
                        <td class="py-4 px-6">
                            <div class="grid grid-cols-none lg:grid-cols-2">
                                <div class="mb-2">
                                    <a href="{{ route('edit_undangan', $data->id ) }}">
                                        <button type="button" class="text-white bg-yellow-400 hover:bg-yellow-300 focus:ring-4 focus:ring-yellow-500 font-medium rounded-lg text-sm px-2 py-2 dark:bg-yellow-400 dark:hover:bg-yellow-300 focus:outline-none dark:focus:ring-yellow-500">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                        </button>        
                                    </a>
                                </div>
                                <div>
                                    <form action="{{ route('hapus_undangan', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button data-judul="{{ $data->judul_acara }}" class="btndelete text-white bg-red-700 hover:bg-red-300 focus:ring-4 focus:ring-red-500 font-medium rounded-lg text-sm px-2 py-2 dark:bg-red-700 dark:hover:bg-red-300 focus:outline-none dark:focus:ring-red-500" type="submit">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
                        <h1>tidak ada data</h1>
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
<script>
$('.btndelete').click(function(event) {
    var form = $(this).closest('form');
    var name = $(this).data('name');
    var judul = $(this).attr('data-judul');
    event.preventDefault();
    swal({
        title: "Apakah Anda Yakin Akan Menghapus " + judul + "?",
        icon: "warning",
        type: "warning",
        buttons: ["Cancel","Yes!"],
        confirmButtonColor: '#E0144C',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((willDelete) => {
        if (willDelete) {
            form.submit();
        }
    });
});
</script>

@endsection