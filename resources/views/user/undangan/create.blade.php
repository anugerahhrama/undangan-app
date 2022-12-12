@extends('user/dataUser/base/base')

@section('content')

  <section id="contact" class="pt-36 pb-10">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-10">
          <h4 class="font-semibold text-4xl text-rose-500 mb-2">
            Tambah Undangan
          </h4>
          <h2 class="font-bold text-slate-900 text-2xl mb-4">
            Buat Undangan Baru
          </h2>
        </div>
        <div class="w-full lg:px-4 md:px-5 sm:px-6">
          <form action="{{ route('simpan_undangan') }}" method="POST">
            @csrf
            @method('POST')
            <div class="w-full lg:w-2/3 lg:mx-auto">
              <div class="w-full block lg:flex">
                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="judul" class="text-base font-bold text-rose-500">Judul Undangan</label>
                  <input type="hidden" readonly class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" value="{{ $user->nama }}"/>
                  <input type="text" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" name="judul_acara" required/>
                  <input type="hidden" value="{{ $user->id }}" name="id_user">
                </div>

                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="kategori" class="text-base font-bold text-rose-500">Tama</label>
                  <select type="text" id="tema" name="id_tema" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary">
                    @foreach ($temas as $tema)
                    <option value="{{ $tema->id }}">{{ $tema->nama_tema }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="w-full block lg:flex">
                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="tema" class="text-base font-bold text-rose-500">Kategori</label>
                  <select id="cars" name="id_kategori" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary">
                    @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="lokasi" class="text-base font-bold text-rose-500">Lokasi</label>
                  <input type="text" id="lokasi" name="lokasi" class="w-full bg-slate-200 mb-1 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" required/>
                  <small class="text-rose-500">Masukan lokasi sesuai yang terdaftar di Google Maps</small>
                </div>
              </div>

              <div class="w-full px-4 mb-8">
                <label for="deskripsi" class="text-base font-bold text-rose-500">Detail Lokasi</label>
                <input type="text" id="detail_lokasi" name="detail_lokasi" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" required />
              </div>

              <div class="w-full block lg:flex">
                <div class="w-full lg:w-1/3 px-4 mb-8">
                  <label for="kategori" class="text-base font-bold text-rose-500">Hari</label>
                  <select class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" id="cars" name="hari">
                      <option value="senin">Senin</option>
                      <option value="selasa">selasa</option>
                      <option value="rabu">rabu</option>
                      <option value="kamis">kamis</option>
                      <option value="jumat">jumat</option>
                      <option value="sabtu">Sabtu</option>
                      <option value="minggu">minggu</option>
                      <br>
                  </select>
                </div>

                <div class="w-full lg:w-1/3 px-4 mb-8">
                  <label for="tanggal" class="text-base font-bold text-rose-500">Tanggal</label>
                  <input type="date" id="tanggal" name="tanggal" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" placeholder="Masukkan Tanggal" required/>
                </div>
                
                <div class="w-full lg:w-1/3 px-4 mb-8">
                  <label for="jam" class="text-base font-bold text-rose-500">Jam Pelaksanaan</label>
                  <input type="time" id="jam" name="jam" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" required/>
                </div>
              </div>

              <div class="w-full px-4 mb-8">
                <label for="deskripsi" class="text-base font-bold text-rose-500">Deskripsi</label>
                <textarea type="text" id="deskripsi" name="deskripsi" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary h-32" required></textarea>
              </div>

              <div class="w-full px-4 block md:flex justify-center">
                <button type="submit"
                  class="text-base mb-3 font-semibold bg-blue-500 md:mx-4 text-white bg-primary py-3 px-8 rounded-xl w-full md:w-1/3 hover:opacity-70 hover:shadow-lg transition duration-500">
                  Tambah
                </button>
                <button type="reset" class="text-base mb-3 font-semibold bg-slate-500 md:mx-4 text-white bg-primary py-3 px-8 rounded-xl w-full md:w-1/3 hover:opacity-70 hover:shadow-lg transition duration-500">
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