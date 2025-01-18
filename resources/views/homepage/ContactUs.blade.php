<section id="kontak" class="">
  <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-xl">
      <h1 class="text-center text-3xl font-bold text-teal-600" id="title">
        Pesan Saran
      </h1>
      <p
        id="paragraph"
        class="font-inter mx-auto mt-4 max-w-md text-center text-gray-500 text-sm">
        Pengen Kasih Pesan Saran Boleh disini ya
        <span aria-label="emoji-cta">😉📲</span>
      </p>

      <form
      method="POST"
        id="scaleUp"
        action="{{ route('pesan_saran.store') }}"
        class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 bg-card" >
        @csrf
        <p
          class="font-inter text-center text-lg font-semibold text-emerald-900">
          Masukan email dan pesan kamu!
        </p>

        <div>
          <label for="email" class="sr-only" >Email</label>

          <div class="relative">
            <input
              type="email" name="email"
              class="invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500 font-inter w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm focus:border-none focus:outline-none focus:ring-1 focus:ring-teal-500"
              placeholder="Masukin email kamu" />


            <span
              class="absolute inset-y-0 end-0 grid place-content-center px-4">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-4 text-gray-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
              </svg>
            </span>
          </div>
        </div>
        
        <div>
          <label for="nama" class="sr-only" >Nama</label>

          <div class="relative">
            <input
              type="nama" name="nama"
              class="invalid:border-red-500 invalid:text-red-600 focus:invalid:border-red-500 focus:invalid:ring-red-500 font-inter w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm focus:border-none focus:outline-none focus:ring-1 focus:ring-teal-500"
              placeholder="Masukin nama kamu" />


            <span
              class="absolute inset-y-0 end-0 grid place-content-center px-4">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="size-4 text-gray-400"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
              </svg>
            </span>
          </div>
        </div>

        <div>
          <label for="textarea" class="sr-only">Textarea</label>

          <div class="relative">
            <textarea
              name="pesan"
              id="Pesan"
              class="font-inter w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm focus:border-none focus:outline-none focus:ring-1 focus:ring-teal-500"
              placeholder="Tulis pesan kamu"></textarea>

            <span
              class="absolute inset-y-0 end-0 grid place-content-center px-4">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="size-4 text-gray-400 animate-bounce">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
              </svg>
            </span>
          </div>
        </div>

        <button
          type="submit"
          class="font-inter block w-full rounded-lg bg-emerald-700 hover:bg-emerald-800 transition-all ease-in-out duration-200 px-5 py-3 text-sm font-medium text-white">
          Kirim
        </button>

        <p class="font-inter text-center text-sm text-gray-500">
          Tenang, kamu juga bisa kirim lewat
          <a class="underline" href="#footer">WhatsApp!</a>
        </p>
      </form>
    </div>
  </div>
</section>