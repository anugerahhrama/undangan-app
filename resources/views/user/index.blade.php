@extends('user/base/base')
  
@section('content')
  <section id="hero" class="pt-32 mb-20 md:pt-36">
    <div class="container">
      <div class="flex flex-wrap md:mx-20">
        <div class="self-center px-4 w-full lg:w-1/2">
          <h1 class="text-base font-semibold text-rose-400 md:text-2xl">
            Selamat Datang Di
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

  <section id="contact" class="pt-36 pb-10 bg-rose-50">
    <div class="container">
      <div class="w-full px-4">
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
        <div class="w-full lg:px-4 md:px-5 sm:px-6">
          <form action="">
            <div class="w-full lg:w-2/3 lg:mx-auto">
              <div class="w-full px-4 mb-8">
                <label for="name" class="text-base font-bold text-rose-500">Name</label>
                <input type="text" id="name"
                  class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" />
              </div>
              <div class="w-full px-4 mb-8">
                <label for="email" class="text-base font-bold text-rose-500">Email</label>
                <input type="email" id="email"
                  class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary" />
              </div>
              <div class="w-full px-4 mb-8">
                <label for="message" class="text-base font-bold text-rose-500">Pesan</label>
                <textarea type="email" id="email"
                  class="w-full bg-slate-200 text-dark p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary h-32"></textarea>
              </div>
              <div class="w-full px-4">
                <button
                  class="text-base font-semibold bg-rose-500 text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-70 hover:shadow-lg transition duration-500">Kirim</button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </section>

@endsection
