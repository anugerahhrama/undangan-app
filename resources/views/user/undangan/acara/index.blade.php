@extends('user/dataUser/base/base')

@section('content')

<section class="pt-32 md:pt-36 min-h-screen">
  <div class="container">
    <div class="w-full px-7">
      <div class="max-w-xl mx-auto text-center mb-10">
        <h4 class="font-extrabold text-xl text-rose-500 mb-2">
          Data Susunan Acara
        </h4>
        <h2 class="font-bold text-slate-900 text-3xl mb-8">
          Susunan Acara yang Kamu Buat
        </h2>
        <a href="{{ route('tambah_acara', $datas->id) }}">
          <button type="button" class="text-white bg-rose-500 hover:bg-rose-800 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-rose-500 dark:hover:bg-rose-300 focus:outline-none dark:focus:ring-rose-500">
              Tambah Undangan
          </button>
        </a>   
      </div>
    
       <div class="container px-20 mb-12 text-center">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-2">
          <table class="w-full border mx-auto text-sm text-center text-gray-500 dark:text-rose-400">
            <thead class="text-xs text-rose-700 uppercase bg-rose-50 dark:bg-rose-500 dark:text-white">
              <tr>
                <th scope="col" class="py-3 px-6">
                  No
                </th>
                <th scope="col" class="py-3 px-6">
                  Nama Susunan Acara
                </th>
                <th scope="col" class="py-3 px-6">
                  Action
                </th>
              </tr>
            </thead>
            <tbody class="text-rose-700 bg-rose-50 dark:bg-rose-500">
              <?php $no=1; ?>
              @foreach($dataAcara as $data)
                <tr class="bg-rose-50 border-b hover:bg-rose-100">
                  <td class="py-4 px-6">
                    {{ $no++; }}
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