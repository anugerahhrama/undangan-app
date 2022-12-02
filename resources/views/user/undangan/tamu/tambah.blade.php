<!-- {{--  <h1>Tambah Tamu</h1>
<form action="{{ route('simpan_tamu', $datas->id) }}" method="POST">
    @csrf
    @method('POST')
    <input type="text" name="id" value="{{ $kode }}">
    <input type="text" name="id_undangan" value="{{ $datas->id }}" readonly><br>
    <input type="text" name="nama" placeholder="nama"><br>
    <input type="text" name="email" placeholder="email"><br>
    <input type="text" name="alamat" placeholder="alamat"><br>
    <input type="text" name="status_undangan" value="belum" readonly><br>
    <input type="text" name="status_presensi" value="belum" readonly><br>
    <button type="submit">Simpan</button>
</form>  --}} -->

@extends('user/dataUser/base/base')
@section('content')
  <section id="contact" class="pt-36 pb-10 bg-rose-50">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-10">
          <h4 class="font-semibold text-xl text-rose-500 mb-2">
            Tambah Tamu
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-4">
            Tambah data daftar tamu anda
          </h2>
        </div>
        <div class="w-full lg:px-4 md:px-5 sm:px-6">
          <form action="{{ route('simpan_tamu', $datas->id) }}" method="POST">
            @csrf
            @method('POST')
            <div class="w-full md:w-1/2 lg:mx-auto">
              <div class="w-full block lg:flex">
                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="judul" class="text-base font-bold text-rose-500">Nama</label>
                      <input type="hidden" name="id" value="{{ $kode }}">
                      <input type="hidden" name="id_undangan" value="{{ $datas->id }}" readonly>
                    <input type="text"     
                      class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" 
                      name="nama" required
                      />
                </div>
                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="kategori" class="text-base font-bold text-rose-500">E-Mail</label>
                  <input type="email"     
                    class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" 
                    name="email" required
                    />
                </div>
              </div>
              <div class="w-full block lg:flex">
                <div class="w-full px-4 mb-8">
                  <label for="judul" class="text-base font-bold text-rose-500">Alamat</label>
                    <textarea type="text"     
                      class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" 
                      name="alamat" required
                      ></textarea>
                      <input type="hidden" name="status_undangan" value="belum" readonly><br>
                      <input type="hidden" name="status_presensi" value="belum" readonly><br>
                </div>
              </div>

              <div class="w-full px-4 block md:flex justify-center">
                <button type="submit"
                  class="text-base mb-3 font-semibold bg-rose-500 md:mx-4 text-white bg-primary py-3 px-8 rounded-xl w-full md:w-1/3 hover:opacity-70 hover:shadow-lg transition duration-500">Tambah
                </button>
                <button type="reset" class="text-base mb-3 font-semibold bg-rose-500 md:mx-4 text-white bg-primary py-3 px-8 rounded-xl w-full md:w-1/3 hover:opacity-70 hover:shadow-lg transition duration-500">
                  Reset
                </button>
                <button type="reset" class="text-base mb-3 font-semibold bg-rose-500 md:mx-4 text-white bg-primary py-3 px-8 rounded-xl w-full md:w-1/3 hover:opacity-70 hover:shadow-lg transition duration-500">
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