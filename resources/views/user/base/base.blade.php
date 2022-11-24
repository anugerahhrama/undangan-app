<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>

<body>

  <header class="top-0 left-0 z-10 flex items-center w-full bg-transparent absolute">
    <div class="container">
      <div class="relative flex items-center justify-between">
        <div class="px-4 lg:px-12">
          <a href="#hero" class="block py-6 text-lg font-bold text-rose-500 lg:text-2xl md:text-xl">
            UNDANG
          </a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="absolute block right-4 lg:hidden">
            <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
            <span class="transition duration-300 ease-in-out hamburger-line"></span>
            <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
          </button>
          <nav id="nav-menu" class="hidden absolute py-5 lg:shadow-none lg:rounded-none bg-rose-200  shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full">
            <ul class="block lg:flex">
              <li class="group">
                <a href="" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  Home
                </a>
              </li>
              <li class="group">
                <a href="" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  About
                </a>
              </li>
              <li class="group">
                <a href="" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  Fitur
                </a>
              </li>
              <li class="group">
                <a href="" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  Contact
                </a>
              </li>
              <li class="group">
                <div class=" lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  <a href="" class="bg-rose-500 hover:bg-rose-400 transition duration-300 ease-in-out hover:border-rose-400 py-1 px-2.5 text-white text-base font-semibold rounded-lg">
                  Login
                  </a>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <section id="hero" class="pt-24 mb-20 lg:pt-36">
    <div class="container">
      <div class="flex flex-wrap lg:mx-20">
        <div class="self-center px-4 w-full lg:w-1/2">
          <h1 class="text-base font-semibold text-rose-400 md:text-xl lg:text-2xl">
            Selamat Datang di
            <span class="block text-3xl text-slate-800 font-bold lg:text-4xl">
              Website Undangan Kami
            </span>
          </h1>
          <h2 class="mb-3 text-lg font-medium text-slate-500 lg:text-2xl">
            Mudah, Cepat, & Gampang
          </h2>
          <p class="mb-8 font-medium leading-relaxed text-slate-500">Buat undangan digital dengan cara yang mudah?</p>
          <a href="" class="bg-rose-500 hover:bg-red-400 py-2 px-4 rounded-xl text-white font-semibold transition duration-300 ease-in-out hover:shadow-lg">
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

  <section id="about" class="pt-16 pb-10 bg-rose-200">
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

  <section class="">

  </section>

  <script src="{{ url ('js/script.js') }}"></script>

</body>

</html>