<section id="artikel" class="">
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-center text-3xl font-bold text-teal-600" id="title">
            Artikel
        </h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($artikel as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden border border-black">
                    <img src="{{ Storage::url($item->gambar) }}" class="w-full h-48 object-cover" alt="Gambar Artikel" />
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $item->judul }}</h2>
                        <p class="text-gray-600 mt-2">{{ $item->tanggal }}</p>
                        <p class="text-gray-600 mt-2">{{ $item->kategori }}</p>
                        <p class="text-gray-600 mt-2">{{ $item->status }}</p>
                        <p class="text-gray-600 mt-2">{!! Str::limit($item->artikel, 100) !!}</p>
                        <div class="mt-4"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
