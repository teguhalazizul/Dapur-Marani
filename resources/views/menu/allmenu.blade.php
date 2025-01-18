<section>
  <div class="max-w-screen-xl mx-auto">
    <div class="flex flex-col">
      <div class="flex flex-col gap-4">
        <div
          class="sticky top-0 z-10 transition-all p-4 bg-card rounded-md w-full">
          <h1 class="text-4xl text-emerald-900">
            Makanan <span aria-label="emoji-food">🍽️</span>
          </h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
          @foreach ($menus as $menu)
          <div class="card">
            <div class="p-5 flex flex-col gap-3">
              <div class="rounded-xl overflow-hidden shadow-lg w-15">
                <img src="{{ Storage::url($menu->image) }}" alt="food" />
              </div>
              <div class="space-y-1">
                <div class="flex items-center gap-2">
                  <span class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="whitespace-nowrap text-sm font-inter">Recomended</p>
                  </span>
                  <span class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in">
                      <path
                        fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                        clip-rule="evenodd" />
                    </svg>
                    <p class="whitespace-nowrap text-sm font-inter">5</p>
                  </span>
                </div>
                <div class="flex justify-between items-center">
                  <h4 class="menu" id="foodName">{{ $menu->name }}</h4>
                  <span class="price" id="price">Harga: Rp. {{ number_format($menu->price, 0, ',', '.') }}</span>
                </div>
                <p class="text-sm text-neutral-500 font-inter font-normal">
                  {{ $menu->description }}
                </p>
                <div class="flex justify-center mt-4"> <!-- Flex to center the button -->
                  <a class="btn-pesan w-full text-center" href="https://logbookjti.policaltex.id/" id="order">
                    Pesan
                  </a>
                </div>
              </div>
            </div>
          </div>

          @endforeach
          <!-- <div class="card">
                <div class="p-5 flex flex-col gap-3">
                  <div class="rounded-xl overflow-hidden shadow-lg w-15">
                    <img
                      src="img/capcuy.jpg"
                      alt="food"
                      class="aspect-square object-cover"
                    />
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">
                          Recomended
                        </p>
                      </span>
                      <span
                        class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">4.5</p>
                      </span>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="menu" id="foodName">Fuyung Hai</h4>
                      <span class="price" id="price">Rp. 25.000</span>
                    </div>
                    <p class="text-sm text-neutral-500 font-inter font-normal">
                      Makanan sehat yang sering sapa
                      <span aria-label="rising-hand">👋</span>
                    </p>
                    <div class="flex items-center gap-2">
                      <a class="basis-1/2 btn-pesan" href="#" id="order">
                        Pesan
                      </a>
                      <a
                        class="basis-1/2 btn-gofood"
                        href="https://bit.ly/3V2UFev"
                        target="_blank"
                      >
                        GoFood
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-5 flex flex-col gap-3">
                  <div class="rounded-xl overflow-hidden shadow-lg w-15">
                    <img
                      src="img/img-7.png"
                      alt="food"
                      class="aspect-square object-cover"
                    />
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">
                          Recomended
                        </p>
                      </span>
                      <span
                        class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">5</p>
                      </span>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="menu" id="foodName">Nasi Goreng</h4>
                      <span class="price" id="price">Rp. 23.000</span>
                    </div>
                    <p class="text-sm text-neutral-500 font-inter font-normal">
                      Sate 2 <span aria-label="plus">+</span> bumbu kacang
                    </p>
                    <div class="flex items-center gap-2">
                      <a class="basis-1/2 btn-pesan" href="#" id="order">
                        Pesan
                      </a>
                      <a
                        class="basis-1/2 btn-gofood"
                        href="https://bit.ly/3V2UFev"
                        target="_blank"
                      >
                        GoFood
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-5 flex flex-col gap-3">
                  <div class="rounded-xl overflow-hidden shadow-lg w-15">
                    <img
                      src="img/sate.jpg"
                      alt="food"
                      class="aspect-square object-cover"
                    />
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">
                          Recomended
                        </p>
                      </span>
                      <span
                        class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">4.5</p>
                      </span>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="menu" id="foodName">Sate TriHita</h4>
                      <span class="price" id="price">Rp. 15.000</span>
                    </div>
                    <p class="text-sm text-neutral-500 font-inter font-normal">
                      Sate 8 <span aria-label="plus">+</span> bumbu kacang
                    </p>
                    <div class="flex items-center gap-2">
                      <a class="basis-1/2 btn-pesan" href="#" id="order">
                        Pesan
                      </a>
                      <a
                        class="basis-1/2 btn-gofood"
                        href="https://bit.ly/3V2UFev"
                        target="_blank"
                      >
                        GoFood
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-5 flex flex-col gap-3">
                  <div class="rounded-xl overflow-hidden shadow-lg w-15">
                    <img
                      src="img/img-8.png"
                      alt="food"
                      class="aspect-square object-cover"
                    />
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="inline-flex text-center items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">4</p>
                      </span>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="menu" id="foodName">Mie TriHita</h4>
                      <span class="price" id="price">Rp. 20.000</span>
                    </div>
                    <p class="text-sm text-neutral-500 font-inter font-normal">
                      Sate 2 <span aria-label="plus">+</span> bumbu kacang
                    </p>
                    <div class="flex items-center gap-2">
                      <a class="w-full btn-pesan" href="#" id="order">
                        Pesan
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-5 flex flex-col gap-3">
                  <div class="rounded-xl overflow-hidden shadow-lg w-15">
                    <img
                      src="img/img-9.jpeg"
                      alt="food"
                      class="aspect-square object-cover"
                    />
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">
                          Recomended
                        </p>
                      </span>
                      <span
                        class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">4.5</p>
                      </span>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="menu" id="foodName">Nasi Campur Gebogan</h4>
                      <span class="price" id="price">Rp. 20.000</span>
                    </div>
                    <p class="text-sm text-neutral-500 font-inter font-normal">
                      Sayur 2 <span aria-label="plus">+</span> lauk 5
                      <span aria-label="plus">+</span> sate 1
                      <span aria-label="plus">+</span> sambal
                      <span aria-label="plus">+</span> kuah
                    </p>
                    <div class="flex items-center gap-2">
                      <a class="w-full btn-pesan" href="#" id="order">
                        Pesan
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-5 flex flex-col gap-3">
                  <div class="rounded-xl overflow-hidden shadow-lg w-15">
                    <img
                      src="img/lalapan.png"
                      alt="food"
                      class="aspect-square object-cover"
                    />
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">
                          Recomended
                        </p>
                      </span>
                      <span
                        class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">4.5</p>
                      </span>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="menu" id="foodName">Lalapan TriHita</h4>
                      <span class="price" id="price"> Rp. 20.000</span>
                    </div>
                    <p class="text-sm text-neutral-500 font-inter font-normal">
                      Sedia: Tahu, Tempe, Ayam
                    </p>
                    <div class="flex items-center gap-2">
                      <a class="w-full btn-pesan" href="#" id="order">
                        Pesan
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-5 flex flex-col gap-3">
                  <div class="rounded-xl overflow-hidden shadow-lg w-15">
                    <img
                      src="img/img-10.jpeg"
                      alt="food"
                      class="aspect-square object-cover"
                    />
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">
                          Recomended
                        </p>
                      </span>
                      <span
                        class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">4.6</p>
                      </span>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="menu" id="foodName">Tipat Tahu</h4>
                      <span class="price" id="price">Rp. 15.000</span>
                    </div>
                    <p class="text-sm text-neutral-500 font-inter font-normal">
                      Tipat tahu isinya
                    </p>
                    <div class="flex items-center gap-2">
                      <a class="w-full btn-pesan" href="#" id="order">
                        Pesan
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-5 flex flex-col gap-3">
                  <div class="rounded-xl overflow-hidden shadow-lg w-15">
                    <img src="img/tuna.png" alt="food" />
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">
                          Recomended
                        </p>
                      </span>
                      <span
                        class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">5</p>
                      </span>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="menu" id="foodName">Tuna Bumbu Merah</h4>
                      <span class="price" id="price">Rp. 15.000</span>
                    </div>
                    <p class="text-sm text-neutral-500 font-inter font-normal">
                      Lauk yang enak untuk di temani nasinmu
                    </p>
                    <div class="flex items-center gap-2">
                      <a
                        class="basis-1/2 btn-pesan"
                        id="order"
                        href="#"
                        target="_blank"
                      >
                        Pesan
                      </a>
                      <a
                        class="basis-1/2 btn-gofood"
                        href="https://bit.ly/3V2UFev"
                        target="_blank"
                      >
                        GoFood
                      </a>
                    </div>
                  </div>
                </div>
              </div> -->
        </div>
      </div>




      <!-- FROZEN FOOD -->
      <div class="flex flex-col gap-4">
        <div
          class="sticky top-0 z-10 transition-all p-4 bg-card rounded-md w-full">
          <h1 class="text-4xl text-emerald-900">
            Cemilan <span aria-label="emoji-drink">🍽️</span>
          </h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

          @foreach ($frozenFoods as $frozen_food)
          <div class="card">
            <div class="p-5 flex flex-col gap-3">
              <div class="rounded-xl overflow-hidden shadow-lg w-15">
                <img
                  src="{{ Storage::url($frozen_food->image) }}"
                  alt="drink"
                  class="aspect-square object-cover" />
              </div>
              <div class="space-y-1">
                <div class="flex items-center gap-2">
                  <span
                    class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke-width="1.5"
                      stroke="currentColor"
                      class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="whitespace-nowrap text-sm font-inter">
                      Recomended
                    </p>
                  </span>
                  <span
                    class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in">
                      <path
                        fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                        clip-rule="evenodd" />
                    </svg>
                    <p class="whitespace-nowrap text-sm font-inter">5</p>
                  </span>
                </div>
                <div class="flex justify-between items-center">
                  <h4 class="menu" id="foodName">{{ $frozen_food->name }}</h4>
                  <span class="price" id="price">Harga: Rp. {{ number_format($frozen_food->price, 0, ',', '.') }}</span>
                </div>
                <p class="text-sm text-neutral-500 font-inter font-normal">
                  {{ $frozen_food->description }}
                </p>
                <div class="flex justify-center mt-4"> <!-- Flex to center the button -->
                  <a class="btn-pesan w-full text-center" href="https://logbookjti.policaltex.id/" id="order">
                    Pesan
                  </a>
                </div>
              </div>
            </div>
          </div>

          @endforeach

          <!-- <div class="card">
                <div class="p-5 flex flex-col gap-3">
                  <div class="rounded-xl overflow-hidden shadow-lg w-15">
                    <img
                      src="img/es-kelapa.jpg"
                      alt="drink"
                      class="aspect-square object-cover"
                    />
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">
                          Recomended
                        </p>
                      </span>
                      <span
                        class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">5</p>
                      </span>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="menu" id="foodName">Es Kelapa</h4>
                      <span class="price" id="price">Rp. 6.000</span>
                    </div>
                    <p class="text-sm text-neutral-500 font-inter font-normal">
                      Es kelapa muda segarrr
                    </p>
                    <div class="flex items-center gap-2">
                      <a class="w-full btn-pesan" href="#" id="order">
                        Pesan
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-5 flex flex-col gap-3">
                  <div class="rounded-xl overflow-hidden shadow-lg w-15">
                    <img
                      src="img/kelapamuda.jpg"
                      alt="drink"
                      class="aspect-square object-cover"
                    />
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">
                          Recomended
                        </p>
                      </span>
                      <span
                        class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">5</p>
                      </span>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="menu" id="foodName">Kelapa Muda Utuh</h4>
                      <span class="price" id="price">Rp. 15.000</span>
                    </div>
                    <p class="text-sm text-neutral-500 font-inter font-normal">
                      Es kelapa muda utuh nya kaka
                    </p>
                    <div class="flex items-center gap-2">
                      <a class="w-full btn-pesan" href="#" id="order">
                        Pesan
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-5 flex flex-col gap-3">
                  <div class="rounded-xl overflow-hidden shadow-lg w-15">
                    <img
                      src="img/lemonicee.jpg"
                      alt="drink"
                      class="aspect-square object-cover"
                    />
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">
                          Recomended
                        </p>
                      </span>
                      <span
                        class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">5</p>
                      </span>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="menu" id="foodName">Es Lemon</h4>
                      <span class="price" id="price">Rp. 8.000</span>
                    </div>
                    <p class="text-sm text-neutral-500 font-inter font-normal">
                      Es lemon seger bangett
                    </p>
                    <div class="flex items-center gap-2">
                      <a class="w-full btn-pesan" href="#" id="order">
                        Pesan
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="p-5 flex flex-col gap-3">
                  <div class="rounded-xl overflow-hidden shadow-lg w-15">
                    <img
                      src="img/orangejuice.jpg"
                      alt="drink"
                      class="aspect-square object-cover"
                    />
                  </div>
                  <div class="space-y-1">
                    <div class="flex items-center gap-2">
                      <span
                        class="inline-flex items-center justify-center text-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="-ms-1 me-1 h-4 w-4 svg-icon transition duration-500 ease-in"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">
                          Recomended
                        </p>
                      </span>
                      <span
                        class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          fill="currentColor"
                          class="-ms-1 me-1 h-4 w-4 animate-star transition-all duration-500 ease-in"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                            clip-rule="evenodd"
                          />
                        </svg>
                        <p class="whitespace-nowrap text-sm font-inter">5</p>
                      </span>
                    </div>
                    <div class="flex justify-between items-center">
                      <h4 class="menu" id="foodName">Es Jeruk</h4>
                      <span class="price" id="price">Rp. 8.000</span>
                    </div>
                    <p class="text-sm text-neutral-500 font-inter font-normal">
                      Ada lemon ada jerukk
                    </p>
                    <div class="flex items-center gap-2">
                      <a class="w-full btn-pesan" href="#" id="order">
                        Pesan
                      </a>
                    </div>
                  </div>
                </div>
              </div> -->
        </div>
      </div>
    </div>
  </div>
</section>