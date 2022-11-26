@extends('user/dataUser/base/base')
  
@section('content')

  <section id="fitur" class="pt-36 pb-10">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-10">
          <h4 class="font-semibold text-xl text-rose-500 mb-2">
            Data Undangan
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-8">
            Undangan yang kamu buat
          </h2>
          <a href="" class="bg-rose-500 py-3 px-3.5 rounded-xl text-white font-semibold tracking-wide hover:bg-red-400 hover:border hover:border-solid hover:border-rose-700 transition duration-300 ease-in-out">Tambah Undangan</a>
        </div>
      
        <div class="w-full flex flex-wrap mb-10  justify-center xl:w-10/12 xl:mx-auto">
          <div class="overflow-x-auto ml-8 relative shadow-md border-rose-200 border sm:rounded-lg">
            <table class="w-full text-sm text-left text-rose-500">
                <thead class="text-xs text-rose-700 uppercase bg-rose-200">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Id Surat
                        </th>
                        <th scope="col" class="py-3 px-6">
                          Kategori
                        </th>
                        <th scope="col" class="py-3 px-6">
                          Tema
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Hari
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Tanggal
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Bulan
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Tahun
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Lokasi
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-rose-50 border-b hover:bg-rose-100">
                        <td class="py-4 px-6">
                          S001
                        </td>
                        <td class="py-4 px-6">
                          Undangan Seminar
                        </td>
                        <td class="py-4 px-6">
                          Tema 1
                        </td>
                        <td class="py-4 px-6">
                          Sabtu
                        </td>
                        <td class="py-4 px-6">
                          26
                        </td>
                        <td class="py-4 px-6">
                          November
                        </td>
                        <td class="py-4 px-6">
                          2022
                        </td>
                        <td class="py-4 px-6">
                          Polinema
                        </td>
                        <td class="py-4 px-6 text-right">
                          <a href="#" class="font-medium px-2 text-rose-600 hover:underline">Edit</a>
                          <a href="#" class="font-medium px-2 text-rose-600 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <tr class="bg-rose-50 border-b hover:bg-rose-100">
                        <td class="py-4 px-6">
                          S002
                        </td>
                        <td class="py-4 px-6">
                          Undangan Rapat
                        </td>
                        <td class="py-4 px-6">
                          Tema 2
                        </td>
                        <td class="py-4 px-6">
                          Sabtu
                        </td>
                        <td class="py-4 px-6">
                          26
                        </td>
                        <td class="py-4 px-6">
                          November
                        </td>
                        <td class="py-4 px-6">
                          2022
                        </td>
                        <td class="py-4 px-6">
                          Polinema
                        </td>
                        <td class="py-4 px-6 text-right">
                          <a href="#" class="font-medium px-2 text-rose-600 hover:underline">Edit</a>
                          <a href="#" class="font-medium px-2 text-rose-600 hover:underline">Delete</a>
                        </td>
                    </tr>
                    <tr class="bg-rose-50 hover:bg-rose-100">
                        <td class="py-4 px-6">
                          S003
                        </td>
                        <td class="py-4 px-6">
                          Undangan Acara Makrab
                        </td>
                        <td class="py-4 px-6">
                          Tema 3
                        </td>
                        <td class="py-4 px-6">
                          Sabtu
                        </td>
                        <td class="py-4 px-6">
                          26
                        </td>
                        <td class="py-4 px-6">
                          November
                        </td>
                        <td class="py-4 px-6">
                          2022
                        </td>
                        <td class="py-4 px-6">
                          Polinema
                        </td>
                        <td class="py-4 px-6 text-right">
                          <a href="#" class="font-medium px-2 text-rose-600 hover:underline">Edit</a>
                          <a href="#" class="font-medium px-2 text-rose-600 hover:underline">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
          
      </div>
    </div>
  </section>

  
@endsection