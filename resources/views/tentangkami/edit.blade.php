<x-app-layout>
    @if ($errors->any())
        <div class="bg-red-500 text-white p-3 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Tentang Kami</h1>
        <form action="{{ route('tentangkami.update', $tentangkami->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium">Judul</label>
                <input type="text" name="judul" value="{{ old('judul', $tentangkami->judul) }}" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="mt-1 block w-full border-gray-300 rounded-md">{{ old('deskripsi', $tentangkami->deskripsi) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Jam Buka</label>
                <input type="text" name="jam_buka" value="{{ old('jam_buka', $tentangkami->jam_buka) }}" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Lokasi</label>
                <input type="text" name="lokasi" value="{{ old('lokasi', $tentangkami->lokasi) }}" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Visi</label>
                <textarea name="visi" rows="4" class="mt-1 block w-full border-gray-300 rounded-md">{{ old('visi', $tentangkami->visi) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Misi</label>
                <textarea name="misi" rows="4" class="mt-1 block w-full border-gray-300 rounded-md">{{ old('misi', $tentangkami->misi) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Sejarah Singkat</label>
                <textarea name="sejarah_singkat" rows="4" class="mt-1 block w-full border-gray-300 rounded-md">{{ old('sejarah_singkat', $tentangkami->sejarah_singkat) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full border-gray-300 rounded-md" />
                @if ($tentangkami->gambar)
                    <div class="mt-2">
                        <img src="{{ Storage::url($tentangkami->gambar) }}" alt="Gambar Tentang Kami" class="w-32 h-32 object-cover">
                    </div>
                @endif
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
