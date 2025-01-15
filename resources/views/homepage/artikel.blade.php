<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    <h1>ARTIKEL</h1>
            @foreach ($artikel as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ Storage::url($item->gambar) }}" class="w-full h-48 object-cover" alt="Gambar Artikel" />
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $item->judul }}</h2>
                        <p class="text-gray-600 mt-2">{{ $item->tanggal }}</p>
                        <p class="text-gray-600 mt-2">{{ $item->kategori }}</p>
                        <p class="text-gray-600 mt-2">{{ $item->status }}</p>
                        <p class="text-gray-600 mt-2">{!! Str::limit($item->artikel, 100) !!}</p>
                    </div>
                </div>
            @endforeach
        </div>