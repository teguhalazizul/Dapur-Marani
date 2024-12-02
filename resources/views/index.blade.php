<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TriHita Vegan</title>
    <link rel="stylesheet" href="output.css" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Archivo+Black:regular"
      rel="stylesheet"
    />
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>

  <body>
    <header class="header" id="header">
      <div x-data="{isOpen: false}" class="mx-auto max-w-screen-xl">
        <div class="flex h-16 items-center justify-between">
          <div class="flex-1 md:flex md:items-center md:gap-12">
            <a class="inline-block text-teal-700" href="#" id="logo">
              <span class="font-bold text-xl">TriHita Vegan</span>
            </a>
          </div>

          <div class="md:flex md:items-center md:gap-12">
            <nav aria-label="Global" class="hidden md:block">
              <ul class="flex items-center gap-6 text-sm">
                <li>
                  <a class="link" href="#home"> Home </a>
                </li>

                <li>
                  <a class="link" href="#about"> Tentang Kami </a>
                </li>

                <li>
                  <a class="link" href="#menu"> Menu </a>
                </li>

                <li>
                  <a class="link" href="#kontak"> Kontak </a>
                </li>
              </ul>
            </nav>

            <div class="flex items-center gap-4">
              <div class="hidden md:flex md:gap-4" id="btn-cta">
                <a class="btn-cta" href="https://wa.me/081337369380">
                  Pesan sekarang
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

    <!-- hero section -->
    <section id="home" class="lg:flex lg:flex-col">
      <div class="max-w-screen-xl mx-auto grid place-items-center xl:h-screen">
        <div class="md:flex xl:h-full">
          <!-- content right -->
          <div
            class="flex gap-3 flex-col justify-center md:gap-2 md:w-1/2"
            id="content-right"
          >
            <small
              id="hashtag"
              class="inline-flex items-center text-base text-teal-700 font-bold font-inter mt-2 lg:mt-0"
            >
              <svg
                class="w-8 h-8"
                viewBox="0 0 69 108"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                id="svg"
              >
                <path
                  d="M5.03278 52.8131C21.2369 42.8951 37.5408 30.93 55.3242 23.8507C58.6666 22.5202 61.8253 21.5107 65.3745 21.1413"
                  stroke="currentColor"
                  stroke-width="2.40851"
                  stroke-linecap="round"
                  id="path1"
                />
                <path
                  d="M2.74896 71.0228C18.3094 61.3239 33.7476 51.2604 49.7649 42.3159C55.2969 39.2267 60.988 36.1918 67.1175 34.4831"
                  stroke="currentColor"
                  stroke-width="2.40851"
                  stroke-linecap="round"
                  id="path2"
                />
                <path
                  d="M1.48685 83.403C22.9611 70.0363 44.2167 56.67 67.2376 46.1422"
                  stroke="currentColor"
                  stroke-width="2.40851"
                  stroke-linecap="round"
                  id="path3"
                />
                <path
                  d="M46.9234 2C40.2598 36.1161 35.4971 71.2339 34.0016 106"
                  stroke="currentColor"
                  stroke-width="2.40851"
                  stroke-linecap="round"
                  id="path4"
                />
                <path
                  d="M27.7211 7.34874C24.5074 29.1677 23.0639 50.8448 21.9814 72.8558"
                  stroke="currentColor"
                  stroke-width="2.40851"
                  stroke-linecap="round"
                  id="path5"
                />
              </svg>
              WarisanRasa
            </small>
            <div
              class="relative md:flex md:flex-col md:gap-2 space-y-4 md:space-y-1"
            >
              <svg
                class="w-10 h-10 absolute end-4 -top-2 text-amber-500"
                viewBox="0 0 82 84"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                id="svg"
              >
                <path
                  d="M41.5816 1.21606C39.7862 5.82482 40.3852 10.0977 40.5593 14.9633C40.7854 21.2812 40.9774 27.5593 41.4363 33.8661"
                  stroke="currentColor"
                  stroke-width="3.90596"
                  stroke-linecap="round"
                  id="path1"
                />
                <path
                  d="M41.0651 45.1798C39.7505 51.5096 40.3418 57.6794 40.8893 64.0791C41.4093 70.1568 42.1389 76.2117 42.8566 82.2682"
                  stroke="currentColor"
                  stroke-width="3.90596"
                  stroke-linecap="round"
                  id="path2"
                />
                <path
                  d="M1.13413 46.6647C5.16696 44.8703 8.96881 44.7974 13.3092 44.5029C19.8761 44.0572 26.2025 43.2089 32.656 41.952"
                  stroke="currentColor"
                  stroke-width="3.90596"
                  stroke-linecap="round"
                  id="path3"
                />
                <path
                  d="M47.2629 40.0959C58.4139 39.3819 69.3895 37.5305 80.4472 35.9965"
                  stroke="currentColor"
                  stroke-width="3.90596"
                  stroke-linecap="round"
                  id="path4"
                />
                <path
                  d="M49.3429 34.6508L52.917 28.1667"
                  stroke="currentColor"
                  stroke-width="3.90596"
                  stroke-linecap="round"
                  id="path5"
                />
                <path
                  d="M32.9786 50.3504L28.6387 54.6391"
                  stroke="currentColor"
                  stroke-width="3.90596"
                  stroke-linecap="round"
                  id="path6"
                />
                <path
                  d="M52.6361 48.6656L56.9506 51.5758"
                  stroke="currentColor"
                  stroke-width="3.90596"
                  stroke-linecap="round"
                  id="path7"
                />
                <path
                  d="M31.549 30.8471C26.8741 29.4323 22.7143 27.3543 18.2738 25.3586"
                  stroke="currentColor"
                  stroke-width="3.90596"
                  stroke-linecap="round"
                  id="path8"
                />
              </svg>
              <h1
                class="text-4xl md:text-3xl capitalize text-neutral-800 leading-tight lg:leading-[4rem]"
              >
                Nikmatin makanan <span class="text-teal-600">sehat</span> tanpa
                harus ribet dan
                <span class="decoration-red-600 underline decoration-wavy"
                  >mahal</span
                >
                <svg
                  class="w-10 h-10 hidden text-teal-600 md:w-20 md:h-20 md:inline-flex rotate-45 svg-animation"
                  viewBox="0 0 77 85"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.33755 84.3973C0.297616 62.7119 2.93494 39.8181 19.4192 23.8736C28.2211 15.3599 42.4944 12.5723 47.6281 26.2359C51.1245 35.5419 51.542 51.9945 41.0605 57.0865C29.486 62.7095 40.2945 35.2221 41.9942 32.4952C49.9497 19.7313 59.7772 11.6122 72.2699 3.78281C76.9496 0.849879 73.7108 0.477284 70.0947 1.13476C66.9572 1.7052 63.4035 2.43717 60.5291 3.81975C59.6524 4.24143 65.7349 2.73236 66.6827 2.44768C70.7471 1.22705 75.4874 -0.0219285 75.9527 5.60812C76.0274 6.5127 75.9956 14.9844 74.7481 15.2963C74.099 15.4586 71.0438 10.27 70.4642 9.65288C66.6996 5.64506 63.5835 4.42393 58.2726 5.11792"
                    stroke="currentColor"
                    stroke-width="3"
                    stroke-linecap="round"
                  />
                </svg>
              </h1>
              <p
                class="font-normal text-sm text-gray-500 font-inter leading-normal md:leading-relaxed"
              >
                Cobain nih makanan sehat yang enak dan murah meriah banget! Menu
                pilihan spesial buat kamu yang mau makan enak tapi tetep sehat,
                dan yang pasti ga bikin kantong bolong. Rasain deh kelezatan
                yang bikin badan sehat dan lidah senang, tanpa harus nguras isi
                dompet. Yuk, mari mampir dan nikmati kebaikan yang nggak bikin
                kantong kempes!
              </p>
            </div>
            <div class="flex gap-2 items-center">
              <a class="btn-cta" href="#"> Pesan sekarang </a>
              <a
                href="menu.html"
                class="font-inter font-normal text-sm text-gray-400"
                >Lihat menu</a
              >
            </div>
          </div>
          <!-- content left -->
          <div class="md:basis-1/2 grid place-items-center" id="content-left">
            <div class="relative">
              <img src="img/img-1.png" alt="img" class="w-full lg:max-w-xl" />
              <img
                src="img/daun.png"
                alt="ornament"
                class="absolute top-0 left-1/2 animate-leaf1 transition duration-500 ease-in-out"
                width="28%"
              />
              <img
                src="img/brokoli.png"
                alt="ornament"
                class="absolute right-5 md:right-2 lg:right-0 bottom-0 animate-brokoli origin-top transition duration-500 ease-in-out"
                width="35%"
              />
              <img
                src="img/daun-2.png"
                alt="ornament"
                class="absolute left-0 bottom-0 animate-leaf2 origin-bottom-right transition duration-500 ease-in-out"
                width="28%"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about -->
    <section id="about" class="">
      <div class="max-w-screen-xl mx-auto">
        <h1 id="title" class="text-2xl font-bold text-teal-700 text-center">
          TENTANG KAMI
        </h1>
        <div
          class="p-2 grid grid-cols-2 md:grid-cols-4 md:grid-rows-4 gap-2 transition"
        >
          <div
            class="h-full col-span-2 md:col-span-1 rounded-md md:row-span-2 bg-card p-4"
            id="grid"
          >
            <div class="space-y-3">
              <h1 class="text-3xl md:text-2xl lg:text-3xl text-emerald-900">
                TriHita Vegan
              </h1>
              <p class="text-base text-neutral-500 font-medium font-inter">
                Yuk kenalan singkat sama kami, disini kamu akan tau sejarah,
                visi misi dan info menarik lainnya!
              </p>
            </div>
          </div>
          <div
            class="h-15 col-span-2 rounded-md bg-card md:col-span-3 p-4"
            id="grid"
          >
            <div class="space-y-3">
              <h1 class="text-2xl font-bold text-emerald-900">
                Sejarah Singkat
              </h1>
              <p
                class="text-sm font-normal text-neutral-500 font-inter leading-relaxed"
              >
                Jadi, Tri Hita Vegan itu bukan cuma bisnis biasa, lhoo
                temen-temen! Awalnya, mereka memulai dengan minimarket yang
                khusus jual bahan-bahan vegan. Nah, tapi nggak berhenti di situ,
                mereka punya ide genial buat bikin usaha kuliner dengan konsep
                yang sama. Terus, seiring berjalannya waktu, mereka ekspansi
                lagi nih dengan bikin stand makanan di halaman depan yang jual
                nasi jinggo dan es kelapa
                <span aria-label="coconut ice emoji">🥥🧊</span>. Sudah delapan
                tahun berdiri sejak tahun 2016. Dan yang menarik, usaha ini
                merupakan warisan dari ayah ke anak. Pemilik Tri Hita saat ini
                bernama
                <a
                  href="https://www.instagram.com/kadek_leon/"
                  target="_blank"
                  class="font-medium underline"
                  >Kak Leon</a
                >. Gak cuma cerita biasa, kan?
                <span aria-label="emoji-vegan">😉🌱🌱🍲</span> #KulinerSehat
                #WarisanRasa
              </p>
            </div>
          </div>
          <div
            class="h-15 rounded-md bg-card md:col-start-1 md:row-start-3 p-4"
            id="content-right"
          >
            <div class="space-y-3">
              <h1 class="text-xl text-emerald-900">
                Jam Buka
                <span class="inline-block text-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="w-6 h-6 animate-clock"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </span>
              </h1>
              <p
                class="text-base font-inter text-neutral-600 font-medium leading-relaxed"
              >
                Senin - Minggu: 07.00 - 16.00 WITA
              </p>
              <p
                class="text-base font-inter text-neutral-600 font-medium leading-relaxed"
              >
                Selasa: Tutup
              </p>
            </div>
          </div>
          <div
            id="scaleUp"
            class="h-64 rounded-md md:h-full md:col-span-2 md:col-start-2 md:row-span-2 md:row-start-2 overflow-hidden"
          >
            <div
              class="w-full h-full bg-url bg-cover bg-center"
            ></div>
          </div>
          <div
            id="content-up"
            class="h-15 col-span-2 md:h-full rounded-md bg-card md:col-span-3 md:col-start-1 md:row-start-4 p-4"
          >
            <div class="h-fit">
              <h1 class="text-xl text-emerald-900 font-bold">
                Lokasi TriHita
                <span
                  aria-label="pin location"
                  class="inline-block text-center"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="w-6 h-6 animate-bounce transition"
                  >
                    <path
                      fill-rule="evenodd"
                      d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </span>
              </h1>
              <div
                class="flex flex-col md:flex-row justify-between gap-4 w-full h-fit"
              >
                <p
                  id="scale"
                  class="text-sm font-inter font-normal text-neutral-500 md:w-1/2"
                >
                  Lokasi kami berada
                  <span class="font-bold">
                    di jalan Tibung Sari No.58 Dalung Kecamatan Kuta Utara
                    Kabupaten Badung Bali 80117 Indonesia</span
                  >
                  nih, gampang buat dicari kalau lagi pengen makan enak.
                </p>
                <iframe
                  id="scale"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.7172275585112!2d115.17807537516038!3d-8.623122587635875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238ce3742cf83%3A0xa95001575d8ef0a1!2sTri%20Hita%20Vegan!5e0!3m2!1sid!2sid!4v1709435140822!5m2!1sid!2sid"
                  class="w-full h-full md:w-1/2 rounded-lg"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
          </div>
          <div
            id="content-left"
            class="h-15 md:row-span-2 col-span-2 md:col-span-1 rounded-md bg-card md:col-start-4 md:row-start-2 p-4 space-y-4"
          >
            <div class="space-y-2">
              <h1 id="title" class="text-xl font-bold text-emerald-900">
                Visi
              </h1>
              <ul class="text-sm font-inter text-neutral-500 font-medium">
                <li>
                  Menjadi pusat kuliner vegan terkemuka yang memberikan pilihan
                  makanan sehat dan berkualitas tinggi bagi masyarakat.
                </li>
              </ul>
            </div>
            <div class="space-y-2">
              <h1 id="title" class="text-xl font-bold text-emerald-900">
                Misi
              </h1>
              <ul
                class="space-y-1 text-sm text-neutral-500 font-medium font-inter"
              >
                <li>
                  1. Menyediakan bahan-bahan makanan vegan berkualitas tinggi
                  dengan harga terjangkau.
                </li>
                <li>
                  2. Mengembangkan beragam menu kuliner vegan yang lezat dan
                  bergizi.
                </li>
                <li>
                  3. Menjangkau lebih banyak konsumen dengan ekspansi usaha dan
                  pengembangan outlet.
                </li>
                <li>
                  4. Meneruskan tradisi dan warisan kuliner vegan dari generasi
                  ke generasi.
                </li>
              </ul>
            </div>
          </div>
          <div
            id="content-up"
            class="h-full col-span-2 md:col-span-1 md:row-span-1 rounded-md bg-card md:col-start-4 md:row-start-4 p-4 group"
          >
            <div class="space-y-2">
              <h1 class="text-xl text-emerald-900">Riview makanan kami</h1>
              <p class="text-sm text-neutral-500 font-inter font-medium">
                Teman-teman, yuk intip review makanan enak dari Tri Hita Vegan!
                <span aria-label="emoji-yummy">😋✨</span>
              </p>
              <a
                href="https://bit.ly/ReviewMakananTriHita"
                target="_blank"
                class="inline-flex items-center gap-2 text-lg font-bold text-teal-700"
              >
                Lihat Riview
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6 group-hover:scale-125 transition-all ease-in duration-200"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- SLIDER CARD HIGHLIGHT  -->
    <section id="menu" class="p-6">
      <div class="max-w-screen-xl mx-auto">
        <h1
          id="title"
          class="text-center text-2xl capitalize text-teal-700 font-bold"
        >
          Menu TriHita
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
          </div>
          <!-- Card 1-->
          <!-- Card 2-->
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
          </div>
          <!-- Card 2-->
        </div>
        <div class="text-center p-2" id="btn-transform">
          <a href="menu.html" class="btn-transform">Lihat Menu</a>
        </div>
      </div>
    </section>
    <!-- Contact Us -->
    <section id="kontak" class="">
      <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-xl">
          <h1 class="text-center text-3xl font-bold text-teal-600" id="title">
            Kontak Kami
          </h1>
          <p
            id="paragraph"
            class="font-inter mx-auto mt-4 max-w-md text-center text-gray-500 text-sm"
          >
            Pengen pesen catering, butuh bantuan atau ada pertanyaan? Langsung
            aja kirim ke email kami atau kamu bisa lewat WhatsApp kami!
            <span aria-label="emoji-cta">😉📲</span>
          </p>

          <form
            id="scaleUp"
            action="#"
            class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 bg-card"
          >
            <p
              class="font-inter text-center text-lg font-semibold text-emerald-900"
            >
              Masukan email dan pesan kamu!
            </p>

            <div>
              <label for="email" class="sr-only">Email</label>

              <div class="relative">
                <input
                  type="email"
                  class="invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500 font-inter w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm focus:border-none focus:outline-none focus:ring-1 focus:ring-teal-500"
                  placeholder="Masukin email kamu"
                />

                <span
                  class="absolute inset-y-0 end-0 grid place-content-center px-4"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-4 text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                    />
                  </svg>
                </span>
              </div>
            </div>

            <div>
              <label for="textarea" class="sr-only">Textarea</label>

              <div class="relative">
                <textarea
                  name="Pesan"
                  id="Pesan"
                  class="font-inter w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm focus:border-none focus:outline-none focus:ring-1 focus:ring-teal-500"
                  placeholder="Tulis pesan kamu"
                ></textarea>

                <span
                  class="absolute inset-y-0 end-0 grid place-content-center px-4"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="2"
                    stroke="currentColor"
                    class="size-4 text-gray-400 animate-bounce"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z"
                    />
                  </svg>
                </span>
              </div>
            </div>

            <button
              type="submit"
              class="font-inter block w-full rounded-lg bg-emerald-700 hover:bg-emerald-800 transition-all ease-in-out duration-200 px-5 py-3 text-sm font-medium text-white"
            >
              Kirim
            </button>

            <p class="font-inter text-center text-sm text-gray-500">
              Tenang, kamu juga bisa kirim lewat
              <a class="underline" href="#">WhatsApp!</a>
            </p>
          </form>
        </div>
      </div>
    </section>
    <!-- Contact Us -->
    <!-- Footer -->
    <footer class="bg-teal-50">
      <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="flex justify-center text-teal-700">
          <h1 id="title" class="text-5xl text-center">TriHita Vegan</h1>
        </div>

        <p
          id="paragraph"
          class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-500"
        >
          Tempat makan vegan yang murah dan pastinya enak baik di perut maupun
          di kantong! <span aria-label="emoji-money">🤤💸</span>
        </p>

        <ul
          class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12"
        >
          <li>
            <a
              class="text-gray-700 transition hover:text-gray-700/75"
              href="#home"
            >
              Home
            </a>
          </li>

          <li>
            <a
              class="text-gray-700 transition hover:text-gray-700/75"
              href="#about"
            >
              Tentang Kami
            </a>
          </li>

          <li>
            <a
              class="text-gray-700 transition hover:text-gray-700/75"
              href="#menu"
            >
              Menu
            </a>
          </li>

          <li>
            <a
              class="text-gray-700 transition hover:text-gray-700/75"
              href="#kontak"
            >
              Kontak Kami
            </a>
          </li>
        </ul>

        <ul class="mt-12 flex justify-center gap-6 md:gap-8">

          <li>
            <a
              href="https://www.instagram.com/trihitavegan_/"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:text-gray-700/75"
            >
              <span class="sr-only">Instagram</span>
              <svg
                class="h-6 w-6 hover:-translate-y-1 transition-transform duration-300 ease-out"
                fill="currentColor"
                viewBox="0 0 24 24"
                aria-hidden="true"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd"
                />
              </svg>
            </a>
          </li>

          <li>
            <a
              href="https://wa.me/081337369380"
              rel="noreferrer"
              target="_blank"
              class="text-gray-700 transition hover:text-gray-700/75"
            >
              <span class="sr-only">WhatsApp</span>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6 hover:-translate-y-1 transition-transform duration-300 ease-out"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path
                  d="M7.25361 18.4944L7.97834 18.917C9.18909 19.623 10.5651 20 12.001 20C16.4193 20 20.001 16.4183 20.001 12C20.001 7.58172 16.4193 4 12.001 4C7.5827 4 4.00098 7.58172 4.00098 12C4.00098 13.4363 4.37821 14.8128 5.08466 16.0238L5.50704 16.7478L4.85355 19.1494L7.25361 18.4944ZM2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22ZM8.39232 7.30833C8.5262 7.29892 8.66053 7.29748 8.79459 7.30402C8.84875 7.30758 8.90265 7.31384 8.95659 7.32007C9.11585 7.33846 9.29098 7.43545 9.34986 7.56894C9.64818 8.24536 9.93764 8.92565 10.2182 9.60963C10.2801 9.76062 10.2428 9.95633 10.125 10.1457C10.0652 10.2428 9.97128 10.379 9.86248 10.5183C9.74939 10.663 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.40738 11.0473 9.44455 11.1944C9.45903 11.25 9.50521 11.331 9.54708 11.3991C9.57027 11.4368 9.5918 11.4705 9.60577 11.4938C9.86169 11.9211 10.2057 12.3543 10.6259 12.7616C10.7463 12.8783 10.8631 12.9974 10.9887 13.108C11.457 13.5209 11.9868 13.8583 12.559 14.1082L12.5641 14.1105C12.6486 14.1469 12.692 14.1668 12.8157 14.2193C12.8781 14.2457 12.9419 14.2685 13.0074 14.2858C13.0311 14.292 13.0554 14.2955 13.0798 14.2972C13.2415 14.3069 13.335 14.2032 13.3749 14.1555C14.0984 13.279 14.1646 13.2218 14.1696 13.2222V13.2238C14.2647 13.1236 14.4142 13.0888 14.5476 13.097C14.6085 13.1007 14.6691 13.1124 14.7245 13.1377C15.2563 13.3803 16.1258 13.7587 16.1258 13.7587L16.7073 14.0201C16.8047 14.0671 16.8936 14.1778 16.8979 14.2854C16.9005 14.3523 16.9077 14.4603 16.8838 14.6579C16.8525 14.9166 16.7738 15.2281 16.6956 15.3913C16.6406 15.5058 16.5694 15.6074 16.4866 15.6934C16.3743 15.81 16.2909 15.8808 16.1559 15.9814C16.0737 16.0426 16.0311 16.0714 16.0311 16.0714C15.8922 16.159 15.8139 16.2028 15.6484 16.2909C15.391 16.428 15.1066 16.5068 14.8153 16.5218C14.6296 16.5313 14.4444 16.5447 14.2589 16.5347C14.2507 16.5342 13.6907 16.4482 13.6907 16.4482C12.2688 16.0742 10.9538 15.3736 9.85034 14.402C9.62473 14.2034 9.4155 13.9885 9.20194 13.7759C8.31288 12.8908 7.63982 11.9364 7.23169 11.0336C7.03043 10.5884 6.90299 10.1116 6.90098 9.62098C6.89729 9.01405 7.09599 8.4232 7.46569 7.94186C7.53857 7.84697 7.60774 7.74855 7.72709 7.63586C7.85348 7.51651 7.93392 7.45244 8.02057 7.40811C8.13607 7.34902 8.26293 7.31742 8.39232 7.30833Z"
                ></path>
              </svg>
            </a>
          </li>
        </ul>
      </div>
      <p
        id="paragraph"
        class="text-center text-sm text-gray-500 font-medium leading-relaxed"
      >
        &copy; 2024 TriHita Vegan
      </p>
    </footer>
    <!-- Footer -->
    <!-- <script src="script/script_scrollreveal.min.js"></script> -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script/main.js"></script>
  </body>
</html>
