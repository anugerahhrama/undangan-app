@extends('user/dataUser/base/base')
  
@section('content')
  <section id="hero" class="pt-32 mb-20 md:pt-36">
    <div class="container">
      <div class="flex flex-wrap md:mx-20">
        <div class="self-center px-4 w-full lg:w-1/2">
          <h1 class="text-base font-semibold text-rose-400 md:text-2xl">
            Hallo, Nama User
            <span class="block text-3xl text-slate-800 font-bold md:text-5xl">
              Buat Undangan yuk!
            </span>
          </h1>
          
          <p class="mb-8 font-medium leading-relaxed text-slate-500">Buat undangan digital dengan cara yang mudah?</p>
          <a href="/data-undangan" class="bg-rose-500 hover:bg-red-400 py-2.5 px-4 rounded-xl text-white font-semibold transition duration-300 ease-in-out hover:shadow-lg">
            Buat Sekarang
          </a>
        </div>
        <div class="self-center px-4 w-full lg:w-1/2">
          <div class="relative mt-8 lg:mt-7">
            <img class="max-w-full mx-auto" width="500" height="500" src="{{ url ('img/hero.png') }}">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="fitur" class="pt-36 pb-10">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-10">
          <h4 class="font-semibold text-xl text-rose-500 mb-2">
            Data Undangan
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-4">
            Undangan yang kamu buat
          </h2>
        </div>
      
        <div class="w-full flex flex-wrap mb-10 justify-center xl:w-10/12 xl:mx-auto">
          <div class="my-2 p-4 w-full bg-rose-50 hover:bg-rose-100 hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out mx-2 rounded-lg md:w-1/3 lg:w-1/4 flex flex-wrap justify-center shadow-md">
            <h2 class="text-lg mb-3 font-semibold text-rose-500">Undangan Rapat</h2>
            <p class="text-center text-base text-slate-500">Kamu memiliki 4 undangan</p>
          </div>
          <div class="my-2 p-4 w-full bg-rose-50 hover:bg-rose-100 hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out mx-2 rounded-lg md:w-1/3 lg:w-1/4 flex flex-wrap justify-center shadow-md">
            <h2 class="text-lg mb-3 font-semibold text-rose-500">Undangan Acara</h2>
            <p class="text-center text-base text-slate-500">Kamu memiliki 2 undangan</p>
          </div>
          <div class="my-2 p-4 w-full bg-rose-50 hover:bg-rose-100 hover:scale-105 hover:shadow-xl transition duration-300 ease-in-out mx-2 rounded-lg md:w-1/3 lg:w-1/4 flex flex-wrap justify-center shadow-md">
            <h2 class="text-lg mb-3 font-semibold text-rose-500">Undangan Seminar</h2>
            <p class="text-center text-base text-slate-500">Kamu memiliki 6 undangan</p>
          </div>
        </div>
        <div class="flex justify-center mb-32">
          <a href="" class="bg-rose-500 py-2.5 px-3 rounded-lg text-white font-semibold hover:bg-rose-400 transition duration-300 ease-in-out hover:border hover:border-solid hover:border-rose-600">Buat Undangan Lagi</a>
        </div>
      </div>
    </div>
  </section>

  
@endsection