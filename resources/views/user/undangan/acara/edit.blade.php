@extends('user/dataUser/base/base')

@section('content')
  <section id="contact" class="pt-36 pb-10 mb-10 min-h-screen">
    <div class="container ">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center">
          <h4 class="font-semibold text-xl text-rose-500 mb-2">
            Edit Susunan Acara
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-4">
            Edit Susunan Acara Anda
          </h2>
        </div>
        <div class="w-full lg:px-4 md:px-5 sm:px-6">
          <form action="{{ route('update_acara', [ 'id' => $id, 'id_user' => $datas->id ]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="w-full lg:w-2/3 lg:mx-auto">

              <div class="w-full block">
                  <div class="lg:w-1/2 mx-auto w-full px-4 mb-8">
                    <input type="hidden" id="id_detail" name="id_detail" value="{{ $datas->id }}" readonly
                      class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" />
                  </div>
                  <div class="lg:w-1/2 w-full mx-auto px-4 mb-8">
                    <label for="tanggal" class="text-base font-bold text-rose-500">Nama Susunan Acara</label>
                    <input type="text" id="acara" name="acara"
                      class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" 
                      placeholder="Acara" value="{{ $datas->acara }}"/>
                  </div>
              </div>
              <div class="w-2/3 mx-auto px-4 block md:flex justify-center">
                <button type="submit"
                  class="text-base mb-3 font-semibold bg-blue-500 md:mx-4 text-white bg-primary py-3 px-8 rounded-xl w-full md:w-1/3 hover:opacity-70 hover:shadow-lg transition duration-500">
                  Edit
                </button>
                <button
                  class="text-base mb-3 text-center  font-semibold bg-rose-500 md:mx-4 text-white bg-primary py-3 px-8 rounded-xl w-full md:w-1/3  hover:opacity-70 hover:shadow-lg transition duration-500">
                  <a href="/data_undangan">
                    Kembali
                  </a>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </section>

  
@endsection