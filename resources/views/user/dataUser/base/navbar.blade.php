<header class="top-0 left-0 z-10 flex items-center w-full bg-transparent absolute">
    <div class="container">
      <div class="relative flex items-center justify-between">
        <div class="px-4 lg:px-12">
          <a href="#hero" class="block py-6 text-lg font-bold text-rose-500 lg:text-2xl md:text-xl">
            UNDANG
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
                <a href="#hero" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  Home
                </a>
              </li>
              <li class="group">
                <a href="#data-undangan" class="text-base text-white lg:text-slate-900 py-2 mx-8 flex group-hover:text-rose-500">
                  Data Undangan
                </a>
              </li>
              <li class="group">
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="py-1.5 pl-3 pr-4 font-semibold text-white rounded bg-rose-500 w-full flex justify-center">Nama User <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44">
                    <ul class="py-1 text-sm bg-rose-300 shadow-md rounded-md" aria-labelledby="dropdownLargeButton">
                      <li>
                        <a href="/logout" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-rose-600 rounded dark:hover:text-white">Logout</a>
                      </li>
                </div>
            </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>