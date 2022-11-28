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
          <a href="#hero" class="block py-6 text-lg font-bold text-cyan-500 lg:text-2xl md:text-xl">
            UNDANG
          </a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="absolute block right-4 lg:hidden">
            <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
            <span class="transition duration-300 ease-in-out hamburger-line"></span>
            <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
          </button>
          <nav id="nav-menu" class="hidden absolute py-5 lg:shadow-none lg:rounded-none bg-cyan-200  shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full">
            <ul class="block lg:flex">
              <li class="group">
                <a href="#hero" class="text-base text-slate-700 lg:text-slate-900 py-2 mx-8 flex group-hover:text-cyan-700">
                  Home
                </a>
              </li>
              <li class="group">
                <a href="#detail" class="text-base text-slate-700 lg:text-slate-900 py-2 mx-8 flex group-hover:text-cyan-700">
                  Detail Acara
                </a>
              </li>
              <li class="group">
                <a href="#lokasi" class="text-base text-slate-700 lg:text-slate-900 py-2 mx-8 flex group-hover:text-cyan-700">
                  Lokasi
                </a>
              </li>
              <li class="group">
                <a href="#q" class="text-base font-semibold bg-cyan-600 rounded-md px-2 text-white py-2 mx-8 flex hover:bg-cyan-500">
                  Kembali
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section id="hero" class="pt-32 mb-20 md:pt-36">
    <div class="container">
      <div class="flex flex-wrap md:mx-20">
        <div class="self-center px-4 w-full lg:w-1/2">
          <h1 class="text-base font-semibold text-cyan-500 md:text-2xl">
            Undangan Seminar
            <span class="block text-3xl text-slate-800 font-bold md:text-5xl">
              Frontend Developer
            </span>
          </h1>
          <h2 class="mb-8 text-lg font-medium text-slate-500 md:text-2xl">
            Sabtu 11 November 2022
          </h2>
          <a href="" class="bg-cyan-600 hover:bg-cyan-500 py-2.5 px-4 rounded-xl text-white font-semibold transition duration-300 ease-in-out hover:shadow-lg">
            Lihat Lokasi
          </a>
        </div>
        <div class="self-center px-4 w-full lg:w-1/2">
          <div class="relative mt-10 lg:mt-7">
            <img class="max-w-full mx-auto" width="800" height="800" src="{{ url ('img/seminarHero.png') }}">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="detail" class="pt-32 pb-10 bg-cyan-100">
    <div class="conteiner">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold text-xl text-cyan-600 mb-2">
            Detail Acara
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-4">
            Seminar Frontend
          </h2>
          <p class="font-semibold text-base text-slate-500 md:text-lg">
            Pelaksanaan pada hari sabtu, 11 November 2022, pukul 19.00 WIB
            Tempat pelaksanaan di gedung JTI lantai 7, ruang LPR-01 Polinema
            Materi membahas tentang dasar - dasar HTML dan CSS.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="lokasi" class="pt-32 pb-10">
    <div class="conteiner">
      <div class="w-full px-4">
        <div class="lg:max-w-4xl max-w-2xl mx-auto text-center mb-16">
          <h4 class="font-semibold text-xl text-cyan-600 mb-2">
            Lokasi
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-8">
            Tempat Pelaksanaan
          </h2>
          <div class="">
              <iframe class="rounded-lg shadow-lg gmap_iframe min-w-full h-60 md:h-80" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&amp;q=politeknik negeri malang&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
              </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

    <footer class="text-center bg-cyan-700 text-white py-8">
      <h1>Dibuat dengan Cinta😘</h1>
    </footer>

    <script src="{{ url ('js/script.js') }}"></script>
</body>

</html>