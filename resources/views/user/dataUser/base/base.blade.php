<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>𝑼𝒊𝒏𝒗𝒊𝒕𝒆</title>
  <link rel="icon" href="{{ url('img/icon.png') }}">
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
  @vite('resources/css/app.css')
</head>

<body>

  @include('user.dataUser.base.navbar')
  
  @yield('content')

  @include('user.dataUser.base.footer')

  <script src="{{ url ('js/script.js') }}"></script>
  <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>

</html>