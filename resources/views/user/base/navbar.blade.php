<header class="top-0 left-0 z-10 flex items-center w-full bg-transparent absolute">
    <div class="container">
      <div class="relative flex items-center justify-between">
        <div class="px-4 lg:px-12 flex items-center">
          <img src="img/icon.png" alt="" class="h-10 mr-3 sm:h-14">
          <a href="#hero" class="block py-6 text-lg font-bold text-rose-500 lg:text-2xl md:text-xl">
            𝑼𝒊𝒏𝒗𝒊𝒕𝒆
          </a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="absolute block right-4 lg:hidden">
            <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
            <span class="transition duration-300 ease-in-out hamburger-line"></span>
            <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
          </button>
          <nav id="nav-menu" class="hidden absolute py-5 lg:shadow-none lg:rounded-none bg-rose-200  shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full">
            <ul class="block lg:flex">
              <li class="group">
                <a href="/dashboarduser" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  Home
                </a>
              </li>
              <li class="group">
                <a href="#about" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  About
                </a>
              </li>
              <li class="group">
                <a href="#fitur" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  Fitur
                </a>
              </li>
              <li class="group">
                <a href="#contact" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  Contact
                </a>
              </li>
              <li class="group">
                  <?php
                  if (Auth::check()) { ?>
                  <div class=" lg:text-slate-900 mx-8 flex group-hover:text-rose-500">
                    <a href="/logout">
                      <button class="bg-rose-500 hover:bg-rose-400 transition duration-300 ease-in-out hover:border-rose-400 py-1 px-2.5 text-white text-base font-semibold rounded-lg">
                        Logout
                      </button>
                    </a>
                  </div>
                  <?php } else { ?>
                  <div class=" lg:text-slate-900 mx-8 flex group-hover:text-rose-500">
                    <a href="/login">
                      <button class="bg-rose-500 hover:bg-rose-400 transition duration-300 ease-in-out hover:border-rose-400 py-1 px-2.5 text-white text-base font-semibold rounded-lg">
                        Login
                      </button>
                    </a>
                  </div>
                  <?php } ?>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

@if(\Session::has('alert'))
<script>
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })

  Toast.fire({
    icon: 'success',
    title: 'Login Berhasil'
  })
</script>
@endif
