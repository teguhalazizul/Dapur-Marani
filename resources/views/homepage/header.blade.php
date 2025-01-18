<header class="header" id="header">
      <div x-data="{isOpen: false}" class="mx-auto max-w-screen-xl">
        <div class="flex h-16 items-center justify-between">
          <div class="flex-1 md:flex md:items-center md:gap-12">
            <a class="inline-block text-teal-700" href="#" id="logo">
              <span class="font-bold text-xl">Dapur Marani</span>
            </a>
          </div>

          <div class="md:flex md:items-center md:gap-12">
            <nav aria-label="Global" class="hidden md:block">
              <ul class="flex items-center gap-6 text-sm">
                <li>
                  <a class="link" href="#home"> Home </a>
                </li>

                <li>
                  <a class="link" href="#about"> About Us </a>
                </li>

                <li>
                  <a class="link" href="#menu"> Menu </a>
                </li>
                <li>
                  <a class="link" href="#artikel"> Artikel </a>
                </li>

                <li>
                  <a class="link" href="#kontak"> Pesan Saran </a>
                </li>
                <li>
                  <a class="link" href="#footer"> Kontak </a>
                </li>
              </ul>
            </nav>

            <div class="flex items-center gap-4">
              <div class="hidden md:flex md:gap-4" id="btn-cta">
                <a class="btn-cta" href="{{ route('login') }}">
                  Login
                </a>
              </div>

              <div class="block md:hidden relative">
                <button
                  @click="isOpen = !isOpen"
                  class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16"
                    />
                  </svg>
                </button>
              </div>

              <div
                x-show="isOpen"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-end="opacity-0 scale-90"
                class="z-50 md:hidden container mx-auto absolute top-0 right-0 max-w-full bg-transparent backdrop-blur-lg shadow-sm rounded-lg"
              >
                <div
                  @click="isOpen = !isOpen"
                  class="w-full text-end inline-block px-4"
                >
                  <button>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="w-8 h-8"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"
                      />
                    </svg>
                  </button>
                </div>
                <ul class="md:hidden p-4 grid place-items-center gap-4">
                  <li class="w-full text-center">
                    <a href="#home" class="text-neutral-900 font-medium text-md"
                      >Home</a
                    >
                  </li>
                  <li class="w-full text-center">
                    <a
                      href="#about"
                      class="text-neutral-900 font-medium text-md"
                      >Tentang Kami</a
                    >
                  </li>
                  <li class="w-full text-center">
                    <a href="#menu" class="text-neutral-900 font-medium text-md"
                      >Menu</a
                    >
                  </li>
                  <li class="w-full text-center">
                    <a
                      href="#kontak"
                      class="text-neutral-900 font-medium text-md"
                      >Kontak</a
                    >
                  </li>
                  
                  <li class="w-full">
                    <a
                      class="btn-cta w-full inline-block text-center"
                      href="https://wa.me/081337369380"
                    >
                      Pesan sekarang
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>