<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<section id="menu" class="p-6">
    <div class="max-w-screen-xl mx-auto">
      <h1
        id="title"
        class="text-center text-2xl capitalize text-teal-700 font-bold"
      >
        Menu Dapur Marani
      </h1>
      <div
        id="card"
        class="p-4 flex gap-3 overflow-hidden relative overlay-fade parent-card"
      >
        <!-- Card 1-->
        <div
          class="flex justify-between items-center gap-3 card-stop animate-cardSlider transition-all duration-300 ease-linear"
        >
          <div class="rounded-xl shadow-lg w-full">
            <div class="p-5 flex flex-col gap-3">
              <div class="rounded-xl overflow-hidden shadow-lg w-15">
                <img src="img/img-5.jpg" alt="food" />
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
                      class="-ms-1 me-1 h-4 w-4 animate-star transition-all"
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
                  <h4 class="menu">Nasi Campur</h4>
                  <span class="price">Rp. 18.000</span>
                </div>
                <p class="text-sm text-neutral-500 font-inter font-normal">
                  Sayur 2 <span aria-label="plus">+</span> lauk 3
                  <span aria-label="plus">+</span> sate 1
                  <span aria-label="plus">+</span> sambal
                  <span aria-label="plus">+</span> kuah
                </p>
                <div class="flex items-center gap-2">
                  <a class="basis-1/2 btn-pesan" href="#"> Pesan </a>
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
          <!-- <div class="rounded-xl shadow-lg w-full">
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
                      class="-ms-1 me-1 h-4 w-4 animate-star transition-all"
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
                  <h4 class="menu">Fuyung Hai</h4>
                  <span class="price">Rp. 25.000</span>
                </div>
                <p class="text-sm text-neutral-500 font-inter font-normal">
                  Makanan sehat yang sering sapa
                  <span aria-label="rising-hand">👋</span>
                </p>
                <div class="flex items-center gap-2">
                  <a class="basis-1/2 btn-pesan" href="#"> Pesan </a>
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
          <div class="rounded-xl shadow-lg w-full">
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
                      class="-ms-1 me-1 h-4 w-4 animate-star transition-all"
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
                  <h4 class="menu">Nasi Goreng</h4>
                  <span class="price">Rp. 23.000</span>
                </div>
                <p class="text-sm text-neutral-500 font-inter font-normal">
                  Sate 2 <span aria-label="plus">+</span> bumbu kacang
                </p>
                <div class="flex items-center gap-2">
                  <a class="basis-1/2 btn-pesan" href="#"> Pesan </a>
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
          <div class="rounded-xl shadow-lg w-full">
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
                      class="-ms-1 me-1 h-4 w-4 animate-star transition-all"
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
                  <h4 class="menu">Sate TriHita</h4>
                  <span class="price">Rp. 15.000</span>
                </div>
                <p class="text-sm text-neutral-500 font-inter font-normal">
                  Sate 8 <span aria-label="plus">+</span> bumbu kacang
                </p>
                <div class="flex items-center gap-2">
                  <a class="basis-1/2 btn-pesan" href="#"> Pesan </a>
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
        <!-- Card 1-->

        <!-- Card 2-->
        <!-- <div
          class="flex justify-between items-center gap-3 card-stop animate-cardSlider transition-all duration-300 ease-linear"
        >
          <div class="rounded-xl shadow-lg w-full">
            <div class="p-5 flex flex-col gap-3">
              <div class="rounded-xl overflow-hidden shadow-lg w-15">
                <img src="img/img-5.jpg" alt="food" />
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
                      class="-ms-1 me-1 h-4 w-4 animate-star transition-all"
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
                  <h4 class="menu">Nasi Campur</h4>
                  <span class="price">Rp. 18.000</span>
                </div>
                <p class="text-sm text-neutral-500 font-inter font-normal">
                  Sayur 2 <span aria-label="plus">+</span> lauk 3
                  <span aria-label="plus">+</span> sate 1
                  <span aria-label="plus">+</span> sambal
                  <span aria-label="plus">+</span> kuah
                </p>
                <div class="flex items-center gap-2">
                  <a class="basis-1/2 btn-pesan" href="#"> Pesan </a>
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
          <div class="rounded-xl shadow-lg w-full">
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
                      class="-ms-1 me-1 h-4 w-4 animate-star transition-all"
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
                  <h4 class="menu">Fuyung Hai</h4>
                  <span class="price">Rp. 25.000</span>
                </div>
                <p class="text-sm text-neutral-500 font-inter font-normal">
                  Makanan sehat yang sering sapa
                  <span aria-label="rising-hand">👋</span>
                </p>
                <div class="flex items-center gap-2">
                  <a class="basis-1/2 btn-pesan" href="#"> Pesan </a>
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
          <div class="rounded-xl shadow-lg w-full">
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
                      class="-ms-1 me-1 h-4 w-4 animate-star transition-all"
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
                  <h4 class="menu">Nasi Goreng</h4>
                  <span class="price">Rp. 23.000</span>
                </div>
                <p class="text-sm text-neutral-500 font-inter font-normal">
                  Sate 2 <span aria-label="plus">+</span> bumbu kacang
                </p>
                <div class="flex items-center gap-2">
                  <a class="basis-1/2 btn-pesan" href="#"> Pesan </a>
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
          <div class="rounded-xl shadow-lg w-full">
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
                      class="-ms-1 me-1 h-4 w-4 animate-star transition-all"
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
                  <h4 class="menu">Sate TriHita</h4>
                  <span class="price">Rp. 15.000</span>
                </div>
                <p class="text-sm text-neutral-500 font-inter font-normal">
                  Sate 8 <span aria-label="plus">+</span> bumbu kacang
                </p>
                <div class="flex items-center gap-2">
                  <a class="basis-1/2 btn-pesan" href="#"> Pesan </a>
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
        </div> -->
        <!-- Card 2-->
      </div>
      <div class="text-center p-2" id="btn-transform">
        <a href="menu.html" class="btn-transform">Lihat Menu</a>
      </div>
    </div>
  </section>
