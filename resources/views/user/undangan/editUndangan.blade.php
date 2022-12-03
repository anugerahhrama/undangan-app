@extends('user/dataUser/base/base')

@section('content')

  <section id="contact" class="pt-36 pb-10 bg-rose-50">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-10">
          <h4 class="font-semibold text-4xl text-rose-500 mb-2">
            Edit Undangan
          </h4>
          <h2 class="font-bold text-slate-900 text-2xl mb-4">
            Edit Data Undangan kamu
          </h2>
        </div>
        <div class="w-full lg:px-4 md:px-5 sm:px-6">
          <form action="{{ route('update_undangan', $datas->id ) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="w-full lg:w-2/3 lg:mx-auto">
              <div class="w-full block lg:flex">
                <div class="w-full lg:w-1/2 px-4 mb-8">
                    <label for="judul" class="text-base font-bold text-rose-500">Judul Undangan</label>
                    <input type="text" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" name="judul_acara" value="{{ $datas->judul_acara }}"/>
                    <input type="hidden" value="{{ $user->id }}" name="id_user"><br>
                </div>

                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="kategori" class="text-base font-bold text-rose-500">Tama</label>
                  <select type="text" id="tema" name="id_tema" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary">
                    @foreach ($temas as $tema)
                    <option value="{{ $tema->id }}" <?= ($datas->id_tema== $tema->id )?'selected':'' ?> >{{ $tema->nama_tema }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="w-full block lg:flex">
                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="tema" class="text-base font-bold text-rose-500">Kategori</label>
                  <select id="cars" name="id_kategori" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary">
                    @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" <?= ($datas->id_kategori== $kategori->id )?'selected':'' ?> >{{ $kategori->kategori }}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="w-full lg:w-1/2 px-4 mb-8">
                  <label for="lokasi" class="text-base font-bold text-rose-500">Lokasi</label>
                  <input type="text" id="lokasi" name="lokasi" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" value="{{ $datas->lokasi }}" />
                </div>
              </div>

              <div class="w-full block lg:flex">
                <div class="w-full lg:w-1/3 px-4 mb-8">
                  <label for="kategori" class="text-base font-bold text-rose-500">Hari</label>
                  <select class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" id="cars" name="hari">
                      <option value="senin" <?= ($datas->hari=='senin')?'selected':'' ?> >Senin</option>
                      <option value="selasa" <?= ($datas->hari=='selasa')?'selected':'' ?> >selasa</option>
                      <option value="rabu" <?= ($datas->hari=='rabu')?'selected':'' ?> >rabu</option>
                      <option value="kamis" <?= ($datas->hari=='kamis')?'selected':'' ?> >kamis</option>
                      <option value="jumat" <?= ($datas->hari=='jumat')?'selected':'' ?> >jumat</option>
                      <option value="sabtu" <?= ($datas->hari=='sabtu')?'selected':'' ?> >Sabtu</option>
                      <option value="minggu" <?= ($datas->hari=='minggu')?'selected':'' ?> >minggu</option>
                      <br>
                  </select>
                </div>

                <div class="w-full lg:w-1/3 px-4 mb-8">
                  <label for="tanggal" class="text-base font-bold text-rose-500">Tanggal</label>
                  <input type="date" id="tanggal" name="tanggal" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" value="{{ $datas->tanggal }}"/>
                </div>
                
                <div class="w-full lg:w-1/3 px-4 mb-8">
                  <label for="jam" class="text-base font-bold text-rose-500">Jam Pelaksanaan</label>
                  <input type="time" id="jam" name="jam" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" value="{{ $datas->jam }}" />
                </div>
              </div>

              <div class="w-full px-4 mb-8">
                <label for="deskripsi" class="text-base font-bold text-rose-500">Deskripsi</label>
                <textarea type="text" id="deskripsi" name="deskripsi"
                  class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary h-32">{{ $datas->deskripsi }}</textarea>
              </div>

              <div class="w-full px-4 block md:flex justify-center">
                <button type="submit"
                  class="text-base mb-3 font-semibold bg-blue-500 md:mx-4 text-white bg-primary py-3 px-8 rounded-xl w-full md:w-1/3 hover:opacity-70 hover:shadow-lg transition duration-500">Edit
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