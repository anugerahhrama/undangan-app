<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>𝑼𝒊𝒏𝒗𝒊𝒕𝒆</title>
  <link rel="icon" href="{{ url('img/icon.png') }}">
  @vite('resources/css/app.css')
</head>

<body>

  @include('user.base.navbar')
  
  @yield('content')

  @include('user.base.footer')

  <script src="{{ url ('js/script.js') }}"></script>

</body>

</html>