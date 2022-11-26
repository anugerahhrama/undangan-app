@extends('user/dataUser/base/base')
  
@section('content')
  <section id="contact" class="pt-36 pb-10 bg-rose-50">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-10">
          <h4 class="font-semibold text-xl text-rose-500 mb-2">
            Tambah Undangan
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-4">
            Buat Undangan Baru
          </h2>
        </div>
        <div class="w-full lg:px-4 md:px-5 sm:px-6">
          <form action="">
            <div class="w-full lg:w-2/3 lg:mx-auto">
              <div class="w-full block lg:flex">
                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="judul" class="text-base font-bold text-rose-500">Judul</label>
                  <input type="text" id="judul" name="judul"
                    class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" />
                </div>
                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="kategori" class="text-base font-bold text-rose-500">Kategori</label>
                  <select type="text" id="kategori" name="kategori"
                    class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary">
                    <option value="seminar">Seminar</option>
                    <option value="rapat">Rapat</option>
                    <option value="acara_kegiatan">Acara Kegiatan</option>
                  </select>
                </div>
              </div>

              <div class="w-full block lg:flex">
                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="tema" class="text-base font-bold text-rose-500">Tema</label>
                  <select type="text" id="tema" name="tema"
                    class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary">
                    <option value="1">Tema 1</option>
                    <option value="2">Tema 2</option>
                    <option value="3">Tema 3</option>
                  </select>
                </div>
                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="lokasi" class="text-base font-bold text-rose-500">Lokasi</label>
                  <input type="text" id="lokasi" name="lokasi"
                    class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" />
                </div>
              </div>
              <div class="w-full block md:flex">
                  <div class="lg:w-1/4 w-full px-4 mb-8">
                    <label for="hari" class="text-base font-bold text-rose-500">Hari</label>
                    <input type="text" id="hari" name="hari"
                      class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" />
                  </div>
                  <div class="lg:w-1/4 w-full px-4 mb-8">
                    <label for="tanggal" class="text-base font-bold text-rose-500">Tanggal</label>
                    <input type="number" id="tanggal" name="tanggal"
                      class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" />
                  </div>
                <div class="lg:w-1/4 w-full px-4 mb-8">
                  <label for="bulan" class="text-base font-bold text-rose-500">Bulan</label>
                  <input type="text" id="bulan" name="bulan"
                    class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" />
                </div>
                <div class=" lg:w-1/4 w-full px-4 mb-8">
                  <label for="tahun" class="text-base font-bold text-rose-500">Tahun</label>
                  <input type="number" id="tahun" name="tahun"
                    class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" />
                </div>
              </div>
              <div class="w-full px-4 mb-8">
                  <label for="jam" class="text-base font-bold text-rose-500">Jam Pelaksanaan</label>
                  <input type="time" id="jam"
                    class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" />
                </div>
              <div class="w-full px-4 mb-8">
                <label for="deskripsi" class="text-base font-bold text-rose-500">Deskripsi</label>
                <textarea type="text" id="deskripsi" name="deskripsi"
                  class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary h-32"></textarea>
              </div>
              <div class="w-full px-4 block md:flex justify-center">
                <button
                  class="text-base mb-3 font-semibold bg-rose-500 md:mx-4 text-white bg-primary py-3 px-8 rounded-xl w-full md:w-1/3 hover:opacity-70 hover:shadow-lg transition duration-500">Tambah
                </button>
                <button
                  class="text-base mb-3 font-semibold bg-rose-500 md:mx-4 text-white bg-primary py-3 px-8 rounded-xl w-full md:w-1/3  hover:opacity-70 hover:shadow-lg transition duration-500">Kembali
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </section>

  
@endsection