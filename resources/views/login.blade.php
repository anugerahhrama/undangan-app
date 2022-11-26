<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ url('img/icon.png') }}">
    <title>𝓤𝓷𝓭𝓪𝓷𝓰</title>
    @vite('resources/css/app.css')
</head>
<body>
  <section class="min-h-screen bg-rose-100 p-5 flex items-center justify-center">
    <div class="bg-rose-50 max-w-3xl pb-10 flex rounded-3xl shadow-lg border-rose-100">
      <div class="w-full px-5  md:px-10 lg:px-16">
        <h1 class="text-xl font-semibold mt-8 mb-8 text-center text-rose-600">LOGIN</h1>
        <form action="{{ route('proses') }}" method="POST" class="flex flex-col mb-8">
          @csrf
          @method('POST')
          <input type="email" name="email" id="email" class="mb-5 p-2 shadow-md focus:border-rose-300 focus:outline-none transition ease-in-out focus:bg-white border border-solid duration-300 rounded-lg py-1 " placeholder="E-Mail">
          <input type="password" name="password" id="password" class="mb-5 p-2 shadow-md focus:border-rose-300 focus:outline-none transition ease-in-out focus:bg-white border border-solid duration-300 rounded-lg py-1 " placeholder="Password">
          <button type="submit" class="bg-rose-500 hover:bg-rose-400 transition duration-300 ease-in-out hover:shadow-lg hover:border hover:border-solid hover:border-rose-600 mt-3 py-1.5 text-white font-semibold rounded-lg">Login</button>
        </form>

        <p class="text-rose-300 text-center text-sm md:text-base">Dont have an account? <a href="/register" class="underline text-rose-600">Register</a></p>
      </div>
      
    </div>
  </section>
    
</body>
</html>