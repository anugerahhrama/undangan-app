{{-- Tamu Lihat Tema --}}
<?php 
  if(isset($tamu) && isset($acara) && isset($undangan) && isset($qrcode) && isset($kategori)){
?>

<html style="font-size: 16px;" lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Seminar front end​, SUSUNAN ACARA, DETAIL ACARA, Detail Lokasi, QR CODE">
    <meta name="description" content="">
    <title>tema</title>
    <link rel="stylesheet" href="{{ url('css/nicepage2.css') }}" media="screen">
    <link rel="stylesheet" href="{{ url('css/tema.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ url('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ url('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,47wQbNPTDJp9hMYdvogK2hAUiHsGeiybwaWe36bwtRQ3UTpYV7YuZ8FV5j9nauFCWwcjM6dTzpL5s2N79Rp5unwdMvc8ZKU800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,47wQbNPTDJp9hMYdvogK2hAUiHsGeiybwaWe36bwtRQ3UTpYV7YuZ8FV5j9nauFCWwcjM6dTzpL5s2N79Rp5unwdMvc8ZKU,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Archivo+Black:400">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/icon.png"
      }   
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="tema">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="tema.html" data-home-page-title="tema" class="u-body u-overlap u-xl-mode" data-lang="en">
    <header class="u-clearfix u-header u-header" id="sec-dd51">
      <div class="u-clearfix u-sheet u-valign-top-xs u-sheet-1">
        <a href="https://nicepage.com/c/tiles-website-templates" class="u-image u-logo u-image-1" data-image-width="260" data-image-height="305">
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
    <section class="u-align-center-xs u-clearfix u-image u-section-1" id="carousel_71ea" data-image-width="1788" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-xs u-gradient u-radius-20 u-shape u-shape-round u-shape-1"></div>
        <div class="u-align-center u-container-style u-expanded-width-xs u-group u-radius-20 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            @foreach($kategori as $k)
            <h5 class="u-custom-font u-text u-text-default u-text-font u-text-1">undangan {{ $k->kategori }}</h5>
            @endforeach
            <h1 class="u-text u-text-palette-2-base u-text-2">{{ $undangan->judul_acara }}</h1>
            <h5 class="u-custom-font u-text u-text-default u-text-font u-text-3">{{ $undangan->hari }}, <?= tgl_indo($undangan->tanggal) ?></h5>
            <h5 class="u-custom-font u-text u-text-default u-text-font u-text-4">kepada yth.<br><span style="font-weight: 700;"></span>{{ $tamu->nama }}<br>di tempat.
            </h5>
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-white u-section-2" id="carousel_a6c6">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">SUSUNAN ACARA<br>
        </h2>
        @foreach ($acara as $ac)
        <p class="u-text u-text-2">{{ $ac->acara }} {{ $ac->waktu }}</p>
        @endforeach
      </div>
    </section>

    <section class="u-align-center u-clearfix u-palette-1-base u-section-3" id="carousel_698c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">DETAIL ACARA<br>
        </h2>
        <div class="u-opacity u-opacity-45 u-palette-1-light-1 u-shape u-shape-circle u-shape-1"></div>
        <p class="u-text u-text-2">{{ $undangan->deskripsi }}</p>
      </div>
    </section>

    <section class="u-clearfix u-grey-5 u-section-4" id="carousel_0242">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-top-sm u-valign-top-xs u-container-layout-1">
                  <h2 class="u-text u-text-1">Detail Lokasi&nbsp;</h2>
                  <p class="u-text u-text-2">{{ $undangan->detail_lokasi }}</p>
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

    <section class="u-align-center u-clearfix u-palette-1-base u-section-5" id="carousel_ba17">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center-sm u-align-center-xs u-container-style u-image u-layout-cell u-size-24-xl u-size-25-lg u-size-25-md u-size-25-sm u-size-25-xs" data-image-width="1600" data-image-height="1600">
                <div class="u-container-layout u-container-layout-1">{{ $qrcode }}</div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-35-lg u-size-35-md u-size-35-sm u-size-35-xs u-size-36-xl u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-custom-font u-text u-text-default u-text-1">QR CODE&nbsp;</h2>
                  <p class="u-text u-text-default u-text-2">Gunakan qrcode diamping untuk melakukan absensi ketika sudah tiba di lokasi acara</p>
                </div>
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
    <meta name="keywords" content="Seminar front end​, SUSUNAN ACARA, DETAIL ACARA, Detail Lokasi, QR CODE">
    <meta name="description" content="">
    <title>tema</title>
    <link rel="stylesheet" href="{{ url('css/nicepage2.css') }}" media="screen">
    <link rel="stylesheet" href="{{ url('css/tema.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ url('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ url('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,47wQbNPTDJp9hMYdvogK2hAUiHsGeiybwaWe36bwtRQ3UTpYV7YuZ8FV5j9nauFCWwcjM6dTzpL5s2N79Rp5unwdMvc8ZKU800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,47wQbNPTDJp9hMYdvogK2hAUiHsGeiybwaWe36bwtRQ3UTpYV7YuZ8FV5j9nauFCWwcjM6dTzpL5s2N79Rp5unwdMvc8ZKU,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Archivo+Black:400">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/icon.png"
      }   
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="tema">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="tema.html" data-home-page-title="tema" class="u-body u-overlap u-xl-mode" data-lang="en">
    <header class="u-clearfix u-header u-header" id="sec-dd51">
      <div class="u-clearfix u-sheet u-valign-top-xs u-sheet-1">
        <a href="https://nicepage.com/c/tiles-website-templates" class="u-image u-logo u-image-1" data-image-width="260" data-image-height="305">
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
    <section class="u-align-center-xs u-clearfix u-image u-section-1" id="carousel_71ea" data-image-width="1788" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-xs u-gradient u-radius-20 u-shape u-shape-round u-shape-1"></div>
        <div class="u-align-center u-container-style u-expanded-width-xs u-group u-radius-20 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h5 class="u-custom-font u-text u-text-default u-text-font u-text-1">undangan {{ $d->kategori }}</h5>
            <h1 class="u-text u-text-palette-2-base u-text-2">{{ $d->judul_acara }}</h1>
            <h5 class="u-custom-font u-text u-text-default u-text-font u-text-3">{{ $d->hari }}, <?= tgl_indo($d->tanggal) ?></h5>
            {{-- <h5 class="u-custom-font u-text u-text-default u-text-font u-text-4">kepada yth<br>bpk.abdu<span style="font-weight: 700;"></span>l aziz<br>di tempat
            </h5> --}}
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-white u-section-2" id="carousel_a6c6">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">SUSUNAN ACARA<br>
        </h2>
        @foreach ($acara as $ac)
        <p class="u-text u-text-2">{{ $ac->acara }} {{ $ac->waktu }}</p>
        @endforeach
      </div>
    </section>

    <section class="u-align-center u-clearfix u-palette-1-base u-section-3" id="carousel_698c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">DETAIL ACARA<br>
        </h2>
        <div class="u-opacity u-opacity-45 u-palette-1-light-1 u-shape u-shape-circle u-shape-1"></div>
        <p class="u-text u-text-2">{{ $d->deskripsi }}</p>
      </div>
    </section>

    <section class="u-clearfix u-grey-5 u-section-4" id="carousel_0242">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-top-sm u-valign-top-xs u-container-layout-1">
                  <h2 class="u-text u-text-1">Detail Lokasi&nbsp;</h2>
                  <p class="u-text u-text-2">{{ $d->detail_lokasi }}</p>
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

    {{-- <section class="u-align-center u-clearfix u-palette-1-base u-section-5" id="carousel_ba17">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center-sm u-align-center-xs u-container-style u-image u-layout-cell u-size-24-xl u-size-25-lg u-size-25-md u-size-25-sm u-size-25-xs u-image-1" data-image-width="1600" data-image-height="1600">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-35-lg u-size-35-md u-size-35-sm u-size-35-xs u-size-36-xl u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-custom-font u-text u-text-default u-text-1">QR CODE&nbsp;</h2>
                  <p class="u-text u-text-default u-text-2">Gunakan qrcode diamping untuk melakukan absensi ketika sudah tiba di lokasi acara</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
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
    <meta name="keywords" content="Seminar front end​, SUSUNAN ACARA, DETAIL ACARA, Detail Lokasi, QR CODE">
    <meta name="description" content="">
    <title>tema</title>
    <link rel="stylesheet" href="{{ url('css/nicepage2.css') }}" media="screen">
    <link rel="stylesheet" href="{{ url('css/tema.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ url('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ url('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 5.1.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,47wQbNPTDJp9hMYdvogK2hAUiHsGeiybwaWe36bwtRQ3UTpYV7YuZ8FV5j9nauFCWwcjM6dTzpL5s2N79Rp5unwdMvc8ZKU800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,47wQbNPTDJp9hMYdvogK2hAUiHsGeiybwaWe36bwtRQ3UTpYV7YuZ8FV5j9nauFCWwcjM6dTzpL5s2N79Rp5unwdMvc8ZKU,500i,600,600i,700,700i,800,800i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Archivo+Black:400">
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/icon.png"
      }   
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="tema">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="tema.html" data-home-page-title="tema" class="u-body u-overlap u-xl-mode" data-lang="en">
    <header class="u-clearfix u-header u-header" id="sec-dd51">
      <div class="u-clearfix u-sheet u-valign-top-xs u-sheet-1">
        <a href="https://nicepage.com/c/tiles-website-templates" class="u-image u-logo u-image-1" data-image-width="260" data-image-height="305">
          <img src="{{ url('img/icon.png') }}" class="u-logo-image u-logo-image-1">
        </a>
      </div>
    </header>

    <section class="u-align-center-xs u-clearfix u-image u-section-1" id="carousel_71ea" data-image-width="1788" data-image-height="1080">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-xs u-gradient u-radius-20 u-shape u-shape-round u-shape-1"></div>
        <div class="u-align-center u-container-style u-expanded-width-xs u-group u-radius-20 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h5 class="u-custom-font u-text u-text-default u-text-font u-text-1">undangan seminar</h5>
            <h1 class="u-text u-text-palette-2-base u-text-2">Seminar front end </h1>
            <h5 class="u-custom-font u-text u-text-default u-text-font u-text-3">12 desember 2022</h5>
            <h5 class="u-custom-font u-text u-text-default u-text-font u-text-4">kepada yth<br>bpk.abdu<span style="font-weight: 700;"></span>l aziz<br>di tempat
            </h5>
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-white u-section-2" id="carousel_a6c6">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">SUSUNAN ACARA<br>
        </h2>
        <p class="u-text u-text-2">PEMBUKAAN : 09:00</p>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-palette-1-base u-section-3" id="carousel_698c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">DETAIL ACARA<br>
        </h2>
        <div class="u-opacity u-opacity-45 u-palette-1-light-1 u-shape u-shape-circle u-shape-1"></div>
        <p class="u-text u-text-2">Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </section>

    <section class="u-clearfix u-grey-5 u-section-4" id="carousel_0242">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-top-sm u-valign-top-xs u-container-layout-1">
                  <h2 class="u-text u-text-1">Detail Lokasi&nbsp;</h2>
                  <p class="u-text u-text-2">Gedung AG lantai 1 ruang RPL 1</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-expanded u-grey-10 u-map">
                    <div class="embed-responsive">
                      <iframe class="embed-responsive-item" src="//maps.google.com/maps?output=embed&amp;q=Manhattan&amp;t=m" data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyMiUyQyUyMnpvb20lMjIlM0FudWxsJTJDJTIydHlwZUlkJTIyJTNBJTIycm9hZCUyMiUyQyUyMmxhbmclMjIlM0FudWxsJTJDJTIyYXBpS2V5JTIyJTNBbnVsbCUyQyUyMm1hcmtlcnMlMjIlM0ElNUIlNUQlN0Q="></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-palette-1-base u-section-5" id="carousel_ba17">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center-sm u-align-center-xs u-container-style u-image u-layout-cell u-size-24-xl u-size-25-lg u-size-25-md u-size-25-sm u-size-25-xs u-image-1" data-image-width="1600" data-image-height="1600">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-35-lg u-size-35-md u-size-35-sm u-size-35-xs u-size-36-xl u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-custom-font u-text u-text-default u-text-1">QR CODE&nbsp;</h2>
                  <p class="u-text u-text-default u-text-2">Gunakan qrcode diamping untuk melakukan absensi ketika sudah tiba di lokasi acara</p>
                </div>
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