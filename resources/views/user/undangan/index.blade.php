@extends('user/base/base')
  
@section('content')

<section class="pt-32 mb-20 md:pt-36">
    <div class="conteiner">
        <div class="w-full px-4">
            <div class="text-3xl text-gray-900 dark:text-dark mx-auto text-center mb-16">
                <h1>halaman data undangan</h1>
            </div>
        </div>
    </div>
</section>

<div class="container px-4">   
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-rose-500 dark:text-white">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        id
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nama pemilik
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Waktu
                    </th>
                    <th scope="col" class="py-3 px-6">
                        judul acara
                    </th>
                    <th scope="col" class="py-3 px-6">
                        kategori
                    </th>
                     <th scope="col" class="py-3 px-6">
                        deskripsi
                    </th>
                     <th scope="col" class="py-3 px-6">
                        Tema
                    </th>
                     <th scope="col" class="py-3 px-6">
                        action
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
                </tr>
            </thead>
            <tbody>
                <?php $no=1 ?>
                @forelse($datas as $data)
                <tr class="bg-white border-b dark:border-rose-500">
                    <td class="py-4 px-6">
                        {{ $no++ }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $data->nama }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $data->hari }}-{{ $data->tanggal }}-{{ $data->bulan }}-{{ $data->tahun }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $data->judul_acara }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $data->kategori }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $data->deskripsi }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $data->nama_tema }}
                    </td>
                    <td class="py-4 px-6">
                        <form action="{{ route('hapus_undangan', $data->id) }}" method="POST">
                            <a href="{{ route('edit_undangan', $data->id ) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline" type="submit">Hapus</button>
                        </form>
                    </td>
                    <td class="py-4 px-6">
                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('susunan_acara', $data->id) }}">Susunan acara</a>
                    </td>
                    <td class="py-4 px-6">
                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('tamu_undangan', $data->id) }}">Daftar tamu</a>
                    </td>
                    <td class="py-4 px-6">
                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('lihat_tema', ['id' => $data->id, 'id_tema' => $data->id_tema ] ) }}">Lihat Tema</a>
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


<table border="2">
    <a href="{{ route('tambah_undangan') }}">Tambah</a>
    <thead>
        <tr>
                
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>

@endsection