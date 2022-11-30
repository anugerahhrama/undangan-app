<h1>Tamu Undangan</h1>
<a href="{{ route('tambah_tamu', $datas->id) }}">Tambah</a>
<table border="2">
        <tbody> 
    @forelse($data as $d)
            <tr>
                <td>{{ $d->id }}</td>
                <td>{{ $d->id_undangan }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->judul_acara }}</td>
                <td>{{ $d->status_undangan }}</td>
                <td>{{ $d->status_presensi }}</td>
                <td><a href="{{route('lihat_tamu', ['id' => $datas->id, 'id_tamu' => $d->id ] )}}">Lihat</a></td>
                <td><a href="{{route('presensi_tamu', ['id' => $datas->id, 'id_tamu' => $d->id ] )}}">Presensi</a></td>
                <td><a href="{{route('edit_tamu', ['id' => $datas->id, 'id_tamu' => $d->id ] )}}">Edit</a></td>
                <td>
                    <form action="{{ route('hapus_tamu', ['id' => $datas->id, 'id_tamu' => $d->id ]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
                <?php  
                    if($d->status_undangan == 'terkirim'){
                ?>
                <td>
                    Terkirim
                </td>
                <?php }else{ ?>
                <td>
                    <a href="{{ route('kirim_tamu', ['id' => $datas->id, 'id_tamu' => $d->id ]) }}" method="POST">Kirim</a>
                </td>
                <?php } ?>
            </tr>
    @empty
        <h1>Data tidak ada</h1>
    @endforelse
        </tbody>
</table>

{{--  <h1>Susunan acara</h1>
<a href="{{ route('tambah_acara', $datas->id) }}">Tambah</a>
<table border="2">
    <tbody>
        
        @foreach($dataAcara as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->acara }}</td>
                <td>
                    <form action="{{ route('hapus_acara', ['id' => $datas->id, 'id_user' => $data->id]) }}" method="POST">
                    <a href="{{route('edit_acara', ['id' => $datas->id, 'id_user' => $data->id] )}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  --}}

@extends('user/dataUser/base/base')

@section('content')

  <section id="" class="pt-36 min-h-screen">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-10">
          <h4 class="font-extrabold text-xl text-rose-500 mb-2">
            Data Tamu
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-8">
            Daftar Tamu Undangan Kamu
          </h2>
          <a href="{{ route('tambah_tamu', $datas->id) }}" class="bg-rose-500 py-3 px-3.5 rounded-xl text-white font-semibold tracking-wide hover:bg-red-400 hover:border hover:border-solid hover:border-rose-700 transition duration-300 ease-in-out">
            Tambah
          </a>
        </div>
      
        <div class="w-full flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
          <div class="overflow-x-auto ml-8 relative shadow-md border-rose-200 border sm:rounded-lg">
            <table class="w-full text-sm text-left text-rose-500">
              <thead class="text-xs text-rose-700 uppercase bg-rose-200">
                <tr>
                  <th scope="col" class="py-3 px-6">
                    Id Tamu
                  </th>
                  <th scope="col" class="py-3 px-6">
                    Id Undangan
                  </th>
                  <th scope="col" class="py-3 px-6">
                    Nama
                  </th>
                  <th scope="col" class="py-3 px-6">
                    E-Mail
                  </th>
                  <th scope="col" class="py-3 px-6">
                    Acara
                  </th>
                  <th scope="col" class="py-3 px-6">
                    Status Undangan
                  </th>
                  <th scope="col" class="py-3 px-6">
                    Presensi
                  </th>
                  <th scope="col" class="py-3 px-6">
                    Nama Susunan Acara
                  </th>
                  <th scope="col" class="py-3 px-6">
                    Nama Susunan Acara
                  </th>
                  <th scope="col" class="py-3 px-6">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($dataAcara as $data)
                  <tr class="bg-rose-50 border-b hover:bg-rose-100">
                    <td class="py-4 px-6">
                      {{ $data->id }}
                    </td>
                    <td class="py-4 px-6">
                      {{ $data->acara }}
                    </td>
                    <td class="pt-4 px-6">
                      <form action="{{ route('hapus_acara', ['id' => $datas->id, 'id_user' => $data->id]) }}" method="POST">
                        <div class="grid grid-cols-none lg:grid-cols-2">
                          <div class="mb-2 mx-2">
                            <a href="{{route('edit_acara', ['id' => $datas->id, 'id_user' => $data->id] )}}">
                              <button type="button" class="text-white bg-yellow-500 hover:bg-yellow-200 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-2 py-2 dark:bg-yellow-400 dark:hover:bg-yellow-300 focus:outline-none dark:focus:ring-yellow-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                              </button>        
                            </a>
                          </div>
                          <div>
                            @csrf
                            @method('DELETE')
                            <button class="text-white bg-red-500 hover:bg-red-200 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-2 dark:bg-red-700 dark:hover:bg-red-300 focus:outline-none dark:focus:ring-red-500" type="submit">
                              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                          </div>
                        </div>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
          
      </div>
    </div>
  </section>

  
@endsection