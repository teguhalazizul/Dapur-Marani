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
        <h1 class="text-2xl font-bold mb-4">Tambah Tentang Kami</h1>
        <form action="{{ route('tentangkami.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-medium">Judul</label>
                <input type="text" name="judul" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Jam Buka</label>
                <input type="text" name="jam_buka" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Lokasi</label>
                <input type="text" name="lokasi" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Visi</label>
                <textarea name="visi" rows="4" class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Misi</label>
                <textarea name="misi" rows="4" class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Sejarah Singkat</label>
                <textarea name="sejarah_singkat" rows="4" class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
