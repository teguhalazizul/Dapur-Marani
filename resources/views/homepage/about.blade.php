<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  @foreach ($tentangkami as $item)
  <section id="about" class="">
    <div class="max-w-screen-xl mx-auto">
      <h1 id="title" class="text-2xl font-bold text-teal-700 text-center">
        TENTANG KAMI
      </h1>
      <div
        class="p-2 grid grid-cols-2 md:grid-cols-4 md:grid-rows-4 gap-2 transition">
        <div
          class="h-full col-span-2 md:col-span-1 rounded-md md:row-span-2 bg-card p-4"
          id="grid">
          <div class="space-y-3">
            <h1 class="text-3xl md:text-2xl lg:text-3xl text-emerald-900">
              {{ $item->judul }}
            </h1>
            <p class="text-base text-neutral-500 font-medium font-inter">
              {{ $item->deskripsi }}
            </p>
          </div>
        </div>
        <div
          class="h-15 col-span-2 rounded-md bg-card md:col-span-3 p-4"
          id="grid">
          <div class="space-y-3">
            <h1 class="text-2xl font-bold text-emerald-900">
              Sejarah Singkat
            </h1>
            <p
              class="text-sm font-normal text-neutral-500 font-inter leading-relaxed">
              {{ $item->sejarah_singkat }}
              <span aria-label="emoji-vegan">😉🌱🌱🍲</span>
            </p>
          </div>
        </div>
        <div
          class="h-15 rounded-md bg-card md:col-start-1 md:row-start-3 p-4"
          id="content-right">
          <div class="space-y-3">
            <h1 class="text-xl text-emerald-900">
              Jam Buka
              <span class="inline-block text-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-6 h-6 animate-clock">
                  <path
                    fill-rule="evenodd"
                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z"
                    clip-rule="evenodd" />
                </svg>
              </span>
            </h1>
            <p
              class="text-base font-inter text-neutral-600 font-medium leading-relaxed">
              {{ $item->jam_buka }}
            </p>

          </div>
        </div>
        <div
          id="scaleUp"
          class="h-64 rounded-md md:h-full md:col-span-2 md:col-start-2 md:row-span-2 md:row-start-2 overflow-hidden">
          <div
            class="w-full h-full bg-cover bg-center"
            style="background-image: url('{{ Storage::url($item->gambar) }}');"></div>
        </div>
        <div
          id="content-up"
          class="h-15 col-span-2 md:h-full rounded-md bg-card md:col-span-3 md:col-start-1 md:row-start-4 p-4">
          <div class="h-fit">
            <h1 class="text-xl text-emerald-900 font-bold">
              Lokasi Dapur Marani
              <span
                aria-label="pin location"
                class="inline-block text-center">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-6 h-6 animate-bounce transition">
                  <path
                    fill-rule="evenodd"
                    d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                    clip-rule="evenodd" />
                </svg>
              </span>
            </h1>
            <div
              class="flex flex-col md:flex-row justify-between gap-4 w-full h-fit">
              <p
                id="scale"
                class="text-sm font-inter font-normal text-neutral-500 md:w-1/2">
                {{ $item->lokasi }}
              </p>
              <iframe
                    id="scale"
                    src="https://maps.app.goo.gl/VJQvg1cSi7n5YUSRA?g_st=ac"
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
          class="h-15 md:row-span-2 col-span-2 md:col-span-1 rounded-md bg-card md:col-start-4 md:row-start-2 p-4 space-y-4">
          <div class="space-y-2">
            <h1 id="title" class="text-xl font-bold text-emerald-900">
              Visi
            </h1>
            <ul class="text-sm font-inter text-neutral-500 font-medium">
              <li>
                {{ $item->visi }}
              </li>
            </ul>
          </div>
          <div class="space-y-2">
            <h1 id="title" class="text-xl font-bold text-emerald-900">
              Misi
            </h1>
            <ul
              class="space-y-1 text-sm text-neutral-500 font-medium font-inter">
              <li>
                {{ $item->misi }}
              </li>

            </ul>
          </div>
        </div>
        <!-- <div
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
   
            </div> -->
      </div>
    </div>
  </section>
  @endforeach
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="script/main.js"></script>
</body>

</html>