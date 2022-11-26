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
    <div class="bg-rose-50 max-w-3xl p-5 flex rounded-3xl shadow-lg border-rose-100">
      <div class="md:w-1/2 w-full px-14">
        <h1 class="text-xl font-semibold mt-8 mb-4 text-center text-rose-600">REGISTER</h1>
        <p class="text-sm pb-5 text-slate-500 text-center">Daftar terlebih dahulu jika akunmu belum terdaftar</p>
        <form action="{{ route('registerStore') }}" method="POST" class="flex flex-col mb-8">
          @csrf
          @method('POST')
          <input type="text" name="nama" id="nama" class="mb-3 p-2 shadow-md focus:border-rose-300 focus:outline-none transition ease-in-out focus:bg-white border border-solid duration-300 rounded-lg py-1 " placeholder="Username">
          <input type="number" name="no_hp" id="no_hp" class="mb-3 p-2 shadow-md focus:border-rose-300 focus:outline-none transition ease-in-out focus:bg-white border border-solid duration-300 rounded-lg py-1 " placeholder="No. Hp">
          <input type="text" name="alamat" id="alamat" class="mb-3 p-2 shadow-md focus:border-rose-300 focus:outline-none transition ease-in-out focus:bg-white border border-solid duration-300 rounded-lg py-1 " placeholder="Alamat">
          <input type="email" name="email" id="email" class="mb-3 p-2 shadow-md focus:border-rose-300 focus:outline-none transition ease-in-out focus:bg-white border border-solid duration-300 rounded-lg py-1 " placeholder="E-Mail">
          <input type="password" name="password" id="password" class="mb-3 p-2 shadow-md focus:border-rose-300 focus:outline-none transition ease-in-out focus:bg-white border border-solid duration-300 rounded-lg py-1 " placeholder="Password">
          <input type="hidden" name="role" value="user">
          <button type="submit" class="bg-rose-500 hover:bg-rose-400 transition duration-300 ease-in-out hover:shadow-lg hover:border hover:border-solid hover:border-rose-600 mt-3 py-1.5 text-white font-semibold rounded-lg">Register</button>
        </form>

        <p class="text-rose-300 text-center">Already have account? <a href="/login" class="underline text-rose-600">Login</a></p>
      </div>
      <div class="w-1/2 relative sm:block hidden">
        <img src="{{ url ('../img/register-2.png') }}" alt="" class="rounded-3xl" style="width: 100%">
        <div class="absolute top-28 left-1/4 text-rose-600 text-lg">Selamat datang di</div>
        <div class="absolute top-36 left-1/4 text-rose-600 font-semibold text-2xl">Webisite Undangan Digital</div>
      </div>
    </div>
  </section>
    
</body>
</html>