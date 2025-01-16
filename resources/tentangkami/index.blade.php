<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
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

        <!-- <a href="{{ route('tentangkami.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Tentang Kami
        </a> -->

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($tentangkami as $item)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    @if($item->gambar)
                        <img src="{{ Storage::url($item->gambar) }}" class="w-full h-48 object-cover" alt="Gambar Tentang Kami" />
                    @else
                        <div class="w-full h-48 bg-gray-300 flex items-center justify-center">
                            <span class="text-gray-600">Tidak ada gambar</span>
                        </div>
                    @endif
                    <div class="p-4">
                        <h2 class="text-lg font-bold">{{ $item->judul }}</h2>
                        <p class="text-gray-600 mt-2">{{ $item->deskripsi }}</p>
                        <p class="text-gray-600 mt-2"><strong>Jam Buka:</strong> {{ $item->jam_buka }}</p>
                        <p class="text-gray-600 mt-2"><strong>Lokasi:</strong> {{ $item->lokasi }}</p>
                        <p class="text-gray-600 mt-2"><strong>Visi:</strong> {{ $item->visi }}</p>
                        <p class="text-gray-600 mt-2"><strong>Misi:</strong> {{ $item->misi }}</p>
                        <p class="text-gray-600 mt-2"><strong>Sejarah Singkat:</strong> {{ $item->sejarah_singkat }}</p>

                        <div class="mt-4 flex items-center space-x-2">
                            <a href="{{ route('tentangkami.edit', $item->id) }}"
                               class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                                <i class="fa-solid fa-pen-to-square"></i>
                                Edit
                            </a>
                            <!-- <form action="{{ route('tentangkami.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                                    <i class="fa-solid fa-trash"></i>
                                    Delete
                                </button>
                            </form> -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
