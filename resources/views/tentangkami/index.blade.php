<x-app-layout>
    <div class="max-w-6xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tentang Kami</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('hapus'))
            <div class="bg-red-500 text-white p-3 mb-4">
                {{ session('hapus') }}
            </div>
        @endif

        <!-- Kontainer Item -->
        <div class="flex flex-wrap gap-6">
            @foreach ($tentangkami as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden flex-shrink-0 w-full sm:w-[48%] lg:w-[100%]">
                    <!-- Gambar -->
                    @if($item->gambar)
                        <img src="{{ Storage::url($item->gambar) }}" class="w-full h-48 object-cover" alt="Gambar Tentang Kami" />
                    @else
                        <div class="w-full h-48 bg-gray-300 flex items-center justify-center">
                            <span class="text-gray-600">Tidak ada gambar</span>
                        </div>
                    @endif

                    <!-- Konten -->
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $item->judul }}</h2>
                        <p class="text-gray-600 text-sm"><strong>Deskripsi:</strong> {{ $item->deskripsi }}</p>
                        <p class="text-gray-600 text-sm"><strong>Jam Buka:</strong> {{ $item->jam_buka }}</p>
                        <p class="text-gray-600 text-sm"><strong>Lokasi:</strong> {{ $item->lokasi }}</p>
                        <p class="text-gray-600 text-sm"><strong>Visi:</strong> {{ $item->visi }}</p>
                        <p class="text-gray-600 text-sm"><strong>Misi:</strong> {{ $item->misi }}</p>
                        <p class="text-gray-600 text-sm"><strong>Sejarah:</strong> {{ $item->sejarah_singkat }}</p>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="p-4">
                        <a href="{{ route('tentangkami.edit', $item->id) }}"
                            class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-600">
                            Edit
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
