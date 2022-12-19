{{-- Tamu Lihat Tema --}}
<?php 
  if(isset($tamu) && isset($acara) && isset($undangan) && isset($qrcode) && isset($kategori)){
?>

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
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <?php
    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }?>
  <section id="hero" class="pt-32 mb-20 md:pt-36">
    <div class="container">
      <div class="flex flex-wrap md:mx-20">
        <div class="self-center px-4 w-full lg:w-1/2">
          @foreach($kategori as $k)
          <h1 class="text-base font-semibold text-cyan-500 md:text-2xl">
              Undangan {{ $k->kategori }}
              @endforeach
            <span class="block text-3xl text-slate-800 font-bold md:text-5xl mb-3">
              {{ $undangan->judul_acara }}
            </span>
          </h1>
          <h2 class="mb-8 text-lg font-medium text-slate-500 md:text-2xl">
            {{ $undangan->hari }} <?= tgl_indo($undangan->tanggal) ?>
          </h2>
          <h1 class="text-base font-base md:text-22xl mb-1 text-black">Kepada yth: </h1>
          <h1 class="text-base font-medium md:text-2xl mb-1 text-black">{{ $tamu->nama }}</h1>
          <h1 class="text-base font-medium md:text-2xl mb-1 text-black">{{ $tamu->email }}</h1>
          <h1 class="text-base font-medium md:text-2xl mb-8 text-black">{{ $tamu->alamat }}</h1>
          <a href="#lokasi" class="bg-cyan-600 hover:bg-cyan-500 py-2.5 px-4 rounded-xl text-white font-semibold transition duration-300 ease-in-out hover:shadow-lg">
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
            Susunan Acara
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-5">
            {{ $undangan->judul_acara }}
          </h2>
          <div class="w-1/3 mx-auto">
          @foreach ($acara as $ac)
            <ul class="">
              <li class="font-semibold text-3xl text-slate-500 md:text-lg">
                {{ $ac->acara }} {{ $ac->waktu }}
              </li>
            </ul>
          @endforeach
          </div>
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
          <div class="mb-8">
              <iframe class="rounded-lg shadow-lg gmap_iframe min-w-full h-60 md:h-80" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&amp;q={{ $undangan->lokasi }}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
              </iframe>
          </div>
          <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Detail Lokasi !</h5>
            <p class="font-normal text-gray-700">{{ $undangan->detail_lokasi }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="qr" class="pt-32 pb-10 bg-cyan-100">
    <div class="conteiner">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold text-xl text-cyan-600 mb-10">
            QR Code
          </h4>
          <div class="w-2/3 flex justify-center mx-auto">
            {{ $qrcode }}
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="text-center bg-cyan-700 text-white py-8">
      <h1>Copyright&copy𝑼𝒊𝒏𝒗𝒊𝒕𝒆 2022</h1>
    </footer>

    <script src="{{ url ('js/script.js') }}"></script>
</body>

</html>

{{-- Undangan Lihat Tema --}}
<?php 
  }else if(isset($data) && isset($acara)){
?>
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
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <?php
    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }?>
  @foreach($data as $d)
  <section id="hero" class="pt-32 mb-20 md:pt-36">
    <div class="container">
      <div class="flex flex-wrap md:mx-20">
        <div class="self-center px-4 w-full lg:w-1/2">
          <h1 class="text-base font-semibold text-cyan-500 md:text-2xl">
              Undangan {{ $d->kategori }}
            <span class="block text-3xl text-slate-800 font-bold md:text-5xl mb-3">
              {{ $d->judul_acara }}
            </span>
          </h1>
          <h2 class="mb-8 text-lg font-medium text-slate-500 md:text-2xl">
            {{ $d->hari }} <?= tgl_indo($d->tanggal) ?>
          </h2>
          <a href="#lokasi" class="bg-cyan-600 hover:bg-cyan-500 py-2.5 px-4 rounded-xl text-white font-semibold transition duration-300 ease-in-out hover:shadow-lg">
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
            Susunan Acara
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-5">
            {{ $d->judul_acara }}
          </h2>
          <div class="w-1/3 mx-auto">
          @foreach ($acara as $ac)
            <ul class="">
              <li class="font-semibold text-3xl text-slate-500 md:text-lg">
                {{ $ac->acara }} {{ $ac->waktu }}
              </li>
            </ul>
          @endforeach
          </div>
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
              <iframe class="rounded-lg shadow-lg gmap_iframe min-w-full h-60 md:h-80" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&amp;q={{ $d->lokasi }}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
              </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach

    <footer class="text-center bg-cyan-700 text-white py-8">
      <h1>Copyright&copy𝑼𝒊𝒏𝒗𝒊𝒕𝒆 2022</h1>
    </footer>

    <script src="{{ url ('js/script.js') }}"></script>
</body>

</html>

{{-- Demo Tema --}}
<?php 
  }else{
?>
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
              Backend Developer
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
            Susunan Acara
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-4">
            Seminar Frontend
          </h2>
          <p class="font-semibold text-base text-slate-500 md:text-lg">
            Pembukaan 08:00<br>
            Sambutan 09:00<br>
            Ramah Tamah 12:00<br>
          </p>
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
      <h1>Copyright&copy𝑼𝒊𝒏𝒗𝒊𝒕𝒆 2022</h1>
    </footer>

    <script src="{{ url ('js/script.js') }}"></script>
</body>

</html>
<?php
  }
?>