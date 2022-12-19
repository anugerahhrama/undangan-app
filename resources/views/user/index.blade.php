@extends('user/base/base')
  
@section('content')
  <section id="hero" class="pt-32 mb-20 md:pt-36">
    <div class="container">
      <div class="flex flex-wrap md:mx-20">
        <div class="self-center px-4 w-full lg:w-1/2">
          <h1 class="text-base font-semibold text-rose-400 md:text-2xl">
            Selamat Datang
            <?php if (Auth::check()) { ?> 
              {{ $user->nama }}
            <?php } ?> Di
            <span class="block text-3xl text-slate-800 font-bold md:text-5xl">
              Website Undangan Kami
            </span>
          </h1>
          <h2 class="mb-3 text-lg font-medium text-slate-500 md:text-2xl">
            Mudah, Cepat, & Gampang
          </h2>
          <p class="mb-8 font-medium leading-relaxed text-slate-500">Buat undangan digital dengan cara yang mudah?</p>
          <div class="">
          <a href="{{ route('data_undangan') }}" class="bg-rose-500  hover:bg-red-400 py-2.5 px-4 rounded-lg text-white font-semibold transition duration-300 ease-in-out hover:shadow-lg">
            Buat Sekarang
          </a>
          <?php if (Auth::check()) { ?>
            <a href="/scan" class="bg-rose-500 mx-2 hover:bg-red-400 py-2.5 px-4 rounded-lg text-white font-semibold transition duration-300 ease-in-out hover:shadow-lg">
              Scanner
            </a>
          <?php } ?>
          </div>
        </div>
        <div class="self-center px-4 w-full lg:w-1/2">
          <div class="relative mt-8 lg:mt-7">
            <img class="max-w-full mx-auto" width="500" height="500" src="{{ url ('img/hero.png') }}">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="pt-32 pb-10 bg-rose-200">
    <div class="conteiner">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold text-xl text-rose-500 mb-2">
            About
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-4">
            Undang Website
          </h2>
          <p class="font-medium text-base text-slate-500 md:text-lg">
            Adalah sebuah paltform yang bergarak dalam bidang pelayanan pembuatan undangan digital berbasis website 
            Undang Website memudahkan clien untuk memplubikasi undangan dengan efektif dan efisien karena dikemas dalam link website dan dapat disebar memlalui E-mail</p>
        </div>
      </div>
    </div>
  </section>

  <section id="fitur" class="pt-36 pb-10">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-10">
          <h4 class="font-semibold text-xl text-rose-500 mb-2">
            Fitur
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-4">
            Fitur Undangan
          </h2>
          <p class="font-medium text-base text-slate-500 md:text-lg">
            Nikmati beragam fitur website undangan digital kami sekarang juga
          </p>
        </div>
      
        <div class="w-full flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
          <div class="my-2 p-4 w-full bg-rose-50 hover:bg-rose-100 hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out mx-2 rounded-lg md:w-1/3 lg:w-1/4 flex flex-wrap justify-center shadow-md">
            <h2 class="text-lg mb-3 font-semibold text-rose-500">Responsive</h2>
            <p class="text-center text-base text-slate-500">Memudahkan mengakses detail undangan disemua perangkat</p>
          </div>
          <div class="my-2 p-4 w-full bg-rose-50 hover:bg-rose-100 hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out mx-2 rounded-lg md:w-1/3 lg:w-1/4 flex flex-wrap justify-center shadow-md">
            <h2 class="text-lg mb-3 font-semibold text-rose-500">Detail Acara</h2>
            <p class="text-center text-base text-slate-500">Menampilkan detail informasi acara seperti lokasi, judul acara</p>
          </div>
          <div class="my-2 p-4 w-full bg-rose-50 hover:bg-rose-100 hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out mx-2 rounded-lg md:w-1/3 lg:w-1/4 flex flex-wrap justify-center shadow-md">
            <h2 class="text-lg mb-3 font-semibold text-rose-500">Lokasi</h2>
            <p class="text-center text-base text-slate-500">Memastikan tamu undangan datang ke tempat yang tepat</p>
          </div>
          <div class="my-2 p-4 w-full bg-rose-50 hover:bg-rose-100 hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out mx-2 rounded-lg md:w-1/3 lg:w-1/4 flex flex-wrap justify-center shadow-md">
            <h2 class="text-lg mb-3 font-semibold text-rose-500">Tema Undangan</h2>
            <p class="text-center text-base text-slate-500">Membuat undangan digitalmu agar lebih indah</p>
          </div>
          <div class="my-2 p-4 w-full bg-rose-50 hover:bg-rose-100 hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out mx-2 rounded-lg md:w-1/3 lg:w-1/4 flex flex-wrap justify-center shadow-md">
            <h2 class="text-lg mb-3 font-semibold text-rose-500">Waktu Acara</h2>
            <p class="text-center text-base text-slate-500">Terdapat waktu acara pelaksanaan pada undangan</p>
          </div>
          <div class="my-2 p-4 w-full bg-rose-50 hover:bg-rose-100 hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out mx-2 rounded-lg md:w-1/3 lg:w-1/4 flex flex-wrap justify-center shadow-md">
            <h2 class="text-lg mb-3 font-semibold text-rose-500">QR Code</h2>
            <p class="text-center text-base text-slate-500">Dapat mengetahui tamu undangan melalui QR code</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-rose-50 pt-36 pb-36">
    <div class="container mx-auto">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-10">
          <h4 class="font-semibold text-xl text-rose-500 mb-2">
            Demo
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-4">
            Demo Tema Undangan
          </h2>
          <p class="font-medium text-base text-slate-500 md:text-lg">
            Nikmati beragam tema undangan digital kami sekarang juga
          </p>
        </div>

        <div class="justify-center flex flex-wrap gap-3">  
          <div class="bg-slate-200 w-[350px] shadow-md  rounded-md">
            <div class="bg-white mx-1.5 mt-[5px] rounded-md">
              <iframe src="{{ route('demo_tema', ['id' => '1']) }}" class="h-[590px] w-[340px] rounded-lg" style="overflow: hidden;"></iframe>
            </div>
          </div>
          <div class="bg-slate-200 w-[350px] shadow-md rounded-md">
            <div class="bg-white mx-1.5 mt-[5px] rounded-md">
              <iframe src="{{ route('demo_tema', ['id' => '2']) }}" class="h-[590px] w-[340px] rounded-lg" style="overflow: hidden;"></iframe>
            </div>
          </div>
          <div class="bg-slate-200 w-[350px] shadow-md rounded-md">
            <div class="bg-white mx-1.5 mt-[5px] rounded-md">
              <iframe src="{{ route('demo_tema', ['id' => '3']) }}" class="h-[590px] w-[340px] rounded-lg" style="overflow: hidden;"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <a href="{{ route('demo_tema', ['id' => '3']) }}">p</a>

  <section class="py-8 lg:py-16">
    <div class="max-w-2xl mx-auto">
      <div class="max-w-xl mx-auto text-center mb-10">
        <h4 class="font-semibold text-xl text-rose-500 mb-2">
          Contact
        </h4>
        <h2 class="font-bold text-slate-900 text-3xl mb-4">
          Hubungi Kami
        </h2>
        <p class="font-medium text-base text-slate-500 md:text-lg">
          Kirim ulasan anda dengan menghubbungi melalui E-Mail
        </p>
      </div>
      <form action="{{ route('komentar.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-10 w-full lg:w-2/3 lg:mx-auto">
          <div class="w-full px-4 mb-8">
            <label for="name" class="text-base font-bold text-rose-500">Name</label>
            <input type="text" id="name" name="nama" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" />
          </div>
          <div class="w-full px-4 mb-8">
            <label for="email" class="text-base font-bold text-rose-500">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" />
          </div>
          <div class="w-full px-4 mb-8">
            <label for="message" class="text-base font-bold text-rose-500">Pesan</label>
            <textarea type="email" id="email" name="pesan" class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary h-32"></textarea>
          </div>
          <div class="w-full px-4">
            <button type="submit" class="text-base font-semibold bg-rose-500 text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-70 hover:shadow-lg transition duration-500">Kirim</button>
          </div>
        </div>
      </form>
    </div>
    <div class="grid mx-5 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 lg:mx-7 gap-6">
      @foreach($komentar as $komen)
      {{-- <p>{{ $komen->nama }}---{{ $komen->email }}----{{ $komen->pesan }}</p><br> --}}
        <article class="border border-gray-200 drop-shadow bg-white rounded-lg">
          <div class="max-w-sm p-6 rounded-lg shadow-md hover:bg-gray-100">
            <footer class="flex justify-between items-center mb-2">
                <div class="flex items-center">
                    <p class="font-semibold inline-flex items-center mr-3 text-sm text-gray-900">
                      <svg class="mr-2 w-7 h-7" style="color:#f43f5e" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                      </svg>
                      {{ $komen->nama }}
                    </p>
                    <p class="text-sm text-gray-600">
                      <time pubdate datetime="2022-02-08" title="February 8th, 2022">{{ $komen->updated_at }}</time>
                    </p>
                </div>
            </footer>
            <p class="text-gray-500 dark:text-gray-400">
              {{ $komen->pesan }}
            </p>
          </div>
        </article>
      @endforeach
    </div>
  </section>

@endsection
