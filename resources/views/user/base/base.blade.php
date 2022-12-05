<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>𝓤𝓷𝓭𝓪𝓷𝓰</title>
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