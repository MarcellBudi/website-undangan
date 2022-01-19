  <nav class="bg-transparent backdrop-blur-lg">
      <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
          <div class="relative flex items-center justify-between h-20">
              <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <button id="nav-btn" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-300" aria-controls="mobile-menu" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <svg id="openIconBtn" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                  <svg id="closeIconBtn" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </button>
              </div>
              <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-between">
                  <div class="flex-shrink-0 flex items-center">
                      <a href="/" class="text-xl font-bold text-gray-700">Hadirin.com</a>
                  </div>
                  <div class="hidden sm:block sm:ml-6">
                      <div class="flex space-x-4">
                        <a href="/" class="text-gray-700 px-3 py-2 rounded-md font-medium text-mf active:bg-blue-300"  aria-current="page">Beranda</a>
                        <a href="#" class="text-gray-700 px-3 py-2 rounded-md font-medium text-md active:bg-blue-300" aria-current="page">Tema</a>
                        <a href="{{ route('tentang') }}" class="text-gray-700 px-3 py-2 rounded-md font-medium text-md active:bg-blue-300" aria-current="page">Tentang kami</a>
                        </div>
                    </div>
                    {{-- @else --}}
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            @guest
                            @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="text-blue-900 hover:bg-blue-900 hover:text-gray-100 px-3 py-2 rounded-md text-md font-medium">Masuk</a>
                            @endif
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-blue-900 outline outline-1 hover:bg-blue-900 hover:text-gray-100 px-3 py-2 rounded-md text-md font-medium">Buat Undangan</a>
                            @endif
                            @else
                            <a href="{{ route('create-invitation', Auth::user()->id) }}" class="text-blue-900 outline outline-1 hover:bg-blue-900 hover:text-gray-100 px-3 py-2 rounded-md text-md font-medium">Buat Undangan</a>
                            @endguest
                        </div>
                    </div>
              </div>
              @auth
              <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                  <div class="ml-3 relative">
                      <div>
                          <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-900 focus:ring-blue-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                              <span class="sr-only">Open user menu</span>
                              <img class="h-8 w-8 rounded-full" src="{{ URL('images/user.png') }}" alt="">
                          </button>
                      </div>
                      <div id="user-menu" class="origin-top-right absolute top-11 right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-gray-100 ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                          <a
                              href="{{ route('create-invitation', Auth::user()->id) }}"
                              class="block md:hidden px-4 py-2 text-sm text-gray-700 active:bg-slate-200"
                              role="menuitem"
                              tabindex="-1"
                              id="user-menu-item-2"
                              >
                              Buat Undangan
                          </a>
                          <a
                              href="{{ route('my-invitation', Auth::user()->id) }}"
                              class="block px-4 py-2 text-sm text-gray-700 active:bg-slate-200"
                              role="menuitem"
                              tabindex="-1"
                              id="user-menu-item-2"
                              >
                              Undangan Saya
                          </a>
                          <a
                              href="{{ route('logout') }}"
                              class="block px-4 py-2 text-sm text-gray-700 active:bg-slate-200"
                              role="menuitem"
                              tabindex="-1"
                              id="user-menu-item-2"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"
                              >
                              Keluar
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                              @csrf
                          </form>
                      </div>
                  </div>
              </div>
              @endauth
          </div>
      </div>
      <div class="hidden sm:hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
          <a href="/" class="text-gray-700 block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Home</a>
          <a href="#" class="text-gray-700 block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Tema</a>
          <a href="{{ route('tentang') }}" class="text-gray-700 block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Tentang Kami</a>
          @guest
                @if (Route::has('login'))
                <a href="{{ route('login') }}" class="block text-blue-300 hover:bg-gray-700 hover:text-gray-700 px-3 py-2 rounded-md text-md font-medium">Masuk</a>
                @endif
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="block text-blue-300 outline outline-1 hover:bg-gray-700 hover:text-gray-700 px-3 py-2 rounded-md text-md font-medium">Buat Undangan</a>
                @endif
            @endguest
      </div>
      </div>
  </nav>