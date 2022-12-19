{{-- Tamu Lihat Tema --}}
<?php 
  if(isset($tamu) && isset($acara) && isset($undangan) && isset($qrcode) && isset($kategori)){
?>

<html style="font-size: 16px;" lang="en">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Undangan Rapat, Susunan Acara, Lokasi, Detail Lokasi, qrcode&nbsp;presensi">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ url('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ url('css/Home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ url('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ url('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,47wQbNPTDJp9hMYdvogK2hAUiHsGeiybwaWe36bwtRQ3UTpYV7YuZ8FV5j9nauFCWwcjM6dTzpL5s2N79Rp5unwdMvc8ZKU800i">
    <link id="u-page-google-font" rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Oswald:200,300,400,500,600,700">
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "",
          "logo": "images/icon.png"
        }
      </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>

  <body data-home-page="Home.html" data-home-page-title="Home"
    class="u-body u-overlap u-overlap-contrast u-overlap-transparent u-xl-mode" data-lang="en">
    <header class="u-clearfix u-header u-header" id="sec-dd51">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="260" data-image-height="305">
          <img src="{{ url('img/icon.png') }}" class="u-logo-image u-logo-image-1">
        </a>
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
    <section class="u-align-left u-clearfix u-image u-shading u-section-1" id="carousel_024a" data-image-width="1980"
      data-image-height="1320">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                @foreach($kategori as $k)
                <div
                  class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                  <h3>Undangan {{ $k->kategori }}</h3>
                  <h1 style="font-family: Times New Roman;">{{ $undangan->judul_acara }}</h1>
                  @endforeach
                  <h3 style="text-transform: capitalize;">{{ $undangan->hari }}, <?= tgl_indo($undangan->tanggal) ?></h3>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                  <h3>Kepada Yth.&nbsp;<br>{{ $tamu->nama }}<br>di tempat</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-image u-section-2" id="carousel_d981" data-image-width="1980"
      data-image-height="1214">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout">
            <h2 class="u-custom-font u-font-playfair-display u-text u-text-default u-text-1">Susunan Acara</h2>
            <div class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
            @foreach ($acara as $ac)
            <h3 class="u-text u-text-default u-text-2">{{ $ac->acara }} : {{ $ac->waktu }}</h3>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <section class="u-clearfix u-grey-5 u-section-3" id="carousel_3ed7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Lokasi</h1>
        <div class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-text u-text-2">Detail Lokasi</h2>
                  <h4 class="u-text u-text-3">{{ $undangan->detail_lokasi }}</h4>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-expanded u-grey-10 u-map">
                    <div class="embed-responsive">
                      <iframe class="embed-responsive-item"
                        src="https://maps.google.com/maps?hl=en&amp;q={{ $undangan->lokasi }}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-clearfix u-image u-section-4" id="carousel_3708" data-image-width="1980" data-image-height="1200">
      <div class="u-clearfix u-expanded-width-sm u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div
              class="u-container-style u-image u-layout-cell u-right-cell u-shape-rectangle u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xs u-size-35-xl"
              data-image-width="855" data-image-height="834">
              <div class="u-container-layout u-container-layout-1">
                <div class="p">{{ $qrcode }}</div>
              </div>
            </div>
            <div
              class="u-align-left u-container-align-center-lg u-container-align-center-md u-container-align-center-xl u-container-style u-layout-cell u-left-cell u-size-25-xl u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xs u-layout-cell-2">
              <div class="u-container-layout u-valign-top-sm u-valign-top-xs u-container-layout-2">
                <h1 class="u-align-center u-text u-text-1">
                  <font color="#478ac9">qrcode&nbsp;</font>
                  <span class="u-text-body-alt-color">presensi</span>
                </h1>
                <h4 class="u-align-center u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-2">Scan qrcode
                  milikmu<br>ketika hadir dalam acara
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-bcc2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p>Copyright&copy𝑼𝒊𝒏𝒗𝒊𝒕𝒆 2022</p>
      </div>
    </footer>
  </body>

</html>

{{-- Undangan Lihat Tema --}}
<?php 
  }else if(isset($data) && isset($acara)){
?>

<html style="font-size: 16px;" lang="en">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Undangan Rapat, Susunan Acara, Lokasi, Detail Lokasi, qrcode&nbsp;presensi">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ url('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ url('css/Home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ url('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ url('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,47wQbNPTDJp9hMYdvogK2hAUiHsGeiybwaWe36bwtRQ3UTpYV7YuZ8FV5j9nauFCWwcjM6dTzpL5s2N79Rp5unwdMvc8ZKU800i">
    <link id="u-page-google-font" rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Oswald:200,300,400,500,600,700">
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "",
          "logo": "images/icon.png"
        }
      </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>

  <body data-home-page="Home.html" data-home-page-title="Home"
    class="u-body u-overlap u-overlap-contrast u-overlap-transparent u-xl-mode" data-lang="en">
    <header class="u-clearfix u-header u-header" id="sec-dd51">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="260" data-image-height="305">
          <img src="{{ url('img/icon.png') }}" class="u-logo-image u-logo-image-1">
        </a>
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
    <section class="u-align-left u-clearfix u-image u-shading u-section-1" id="carousel_024a" data-image-width="1980"
      data-image-height="1320">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div
                  class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                  <h3>Undangan {{ $d->kategori }}</h3>
                  <h1 style="font-family: Times New Roman;">{{ $d->judul_acara }}</h1>
                  <h3 style="text-transform: capitalize;">{{ $d->hari }}, <?= tgl_indo($d->tanggal) ?></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-section-2" id="carousel_d981" data-image-width="1980"
      data-image-height="1214">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout">
            <h2 class="u-custom-font u-font-playfair-display u-text u-text-default u-text-1">Susunan Acara</h2>
            <div class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
            @foreach ($acara as $ac)
            <h3 class="u-text u-text-default u-text-2">{{ $ac->acara }} : {{ $ac->waktu }}</h3>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <section class="u-clearfix u-grey-5 u-section-3" id="carousel_3ed7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Lokasi</h1>
        <div class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-text u-text-2">Detail Lokasi</h2>
                  <h4 class="u-text u-text-3">{{ $d->detail_lokasi }}</h4>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-expanded u-grey-10 u-map">
                    <div class="embed-responsive">
                      <iframe class="embed-responsive-item"
                        src="https://maps.google.com/maps?hl=en&amp;q={{ $d->lokasi }}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endforeach

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-bcc2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p>Copyright&copy𝑼𝒊𝒏𝒗𝒊𝒕𝒆 2022</p>
      </div>
    </footer>

  </body>

</html>

{{-- Demo Tema --}}
<?php 
  }else{
?>

<html style="font-size: 16px;" lang="en">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Undangan Rapat, Susunan Acara, Lokasi, Detail Lokasi, qrcode&nbsp;presensi">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ url('css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ url('css/Home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ url('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ url('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,47wQbNPTDJp9hMYdvogK2hAUiHsGeiybwaWe36bwtRQ3UTpYV7YuZ8FV5j9nauFCWwcjM6dTzpL5s2N79Rp5unwdMvc8ZKU800i">
    <link id="u-page-google-font" rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Oswald:200,300,400,500,600,700">
    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "",
          "logo": "images/icon.png"
        }
      </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>

  <body data-home-page="Home.html" data-home-page-title="Home"
    class="u-body u-overlap u-overlap-contrast u-overlap-transparent u-xl-mode" data-lang="en">
    <header class="u-clearfix u-header u-header" id="sec-dd51">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="260" data-image-height="305">
          <img src="{{ url('img/icon.png') }}" class="u-logo-image u-logo-image-1">
        </a>
      </div>
    </header>

    <section class="u-align-left u-clearfix u-image u-shading u-section-1" id="carousel_024a" data-image-width="1980"
      data-image-height="1320">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div
                  class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                  <h1 class="u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-1">Undangan Rapat</h1>
                  <h3>Senin, 27 Maret 2023</h3>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                  <h2 class="u-text u-text-2">Kepada Yth.&nbsp;<br>bapak Abdul aziz<br>di tempat
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-image u-section-2" id="carousel_d981" data-image-width="1980"
      data-image-height="1214">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout">
            <h2 class="u-custom-font u-font-playfair-display u-text u-text-default u-text-1">Susunan Acara</h2>
            <div class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
            <h3 class="u-text u-text-default u-text-2">Pembukaan : 09:00</h3>
          </div>
        </div>
      </div>
    </section>

    <section class="u-clearfix u-grey-5 u-section-3" id="carousel_3ed7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Lokasi</h1>
        <div class="u-border-1 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-text u-text-2">Detail Lokasi</h2>
                  <h4 class="u-text u-text-3">gedung Ag lantai 7 ruang RPL 1</h4>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-expanded u-grey-10 u-map">
                    <div class="embed-responsive">
                      <iframe class="embed-responsive-item"
                        src="//maps.google.com/maps?output=embed&amp;q=Manhattan&amp;t=m"
                        data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyMiUyQyUyMnpvb20lMjIlM0FudWxsJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlN0Q="></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-clearfix u-image u-section-4" id="carousel_3708" data-image-width="1980" data-image-height="1200">
      <div class="u-clearfix u-expanded-width-sm u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div
              class="u-container-style u-image u-layout-cell u-right-cell u-shape-rectangle u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xs u-size-35-xl u-image-1"
              data-image-width="855" data-image-height="834">
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div
              class="u-align-left u-container-align-center-lg u-container-align-center-md u-container-align-center-xl u-container-style u-layout-cell u-left-cell u-size-25-xl u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xs u-layout-cell-2">
              <div class="u-container-layout u-valign-top-sm u-valign-top-xs u-container-layout-2">
                <h1 class="u-align-center u-text u-text-1">
                  <font color="#478ac9">qrcode&nbsp;</font>
                  <span class="u-text-body-alt-color">presensi</span>
                </h1>
                <h4 class="u-align-center u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-2">Scan qrcode
                  milikmu<br>ketika hadir dalam acara
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-bcc2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p>Copyright&copy𝑼𝒊𝒏𝒗𝒊𝒕𝒆 2022</p>
      </div>
    </footer>

  </body>

</html>

<?php
  }
?>