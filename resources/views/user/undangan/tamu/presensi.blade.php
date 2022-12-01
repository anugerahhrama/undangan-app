{{--  <h1>Presensi Tamu</h1>
<h1>{{ $tamu->nama }}</h1>
<h1>{{ $tamu->email }}</h1>
<form action="{{ route('hadir_tamu', ['id' => $undangan->id, 'id_tamu' => $tamu->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit">Hadir</button>
</form>  --}}
{{--  
@extends('user/dataUser/base/base')
@section('content')


  
@endsection  --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite('resources/css/app.css')
</head>

<body class="">

    <section id="contact" class="pt-36 bg-rose-50 min-h-screen">
    <div class="container mx-auto">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-10">
          <h4 class="font-semibold text-xl text-rose-500 mb-2">
            Presensi Tamu
          </h4>
          <h2 class="font-bold text-slate-900 text-3xl mb-4">
            {{ $tamu->nama }}
          </h2>
          <h2 class="font-bold text-slate-900 text-3xl mb-4">
            {{ $tamu->email }}
          </h2>
        </div>
        <div class="w-full lg:px-4 md:px-5 sm:px-6">
          <form action="{{ route('hadir_tamu', ['id' => $undangan->id, 'id_tamu' => $tamu->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="w-full md:w-1/2 lg:mx-auto">
              <div class="w-full px-4 block md:flex justify-center">
                <button type="submit"
                  class="text-base mb-3 font-semibold bg-rose-500 md:mx-4 text-white bg-primary py-3 px-8 rounded-xl w-full md:w-1/3 hover:opacity-70 hover:shadow-lg transition duration-500">Hadir
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </section>

  <script src="{{ url ('js/script.js') }}"></script>
</body>

</html>