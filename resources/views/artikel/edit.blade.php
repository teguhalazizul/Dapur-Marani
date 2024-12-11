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
        <h1 class="text-2xl font-bold mb-4">Edit Artikel</h1>
        <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <!-- Judul Artikel -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Judul</label>
                <input type="text" name="judul" value="{{ $artikel->judul }}" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <!-- Tanggal Artikel -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Tanggal</label>
                <input type="date" name="tanggal" value="{{ $artikel->tanggal }}" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <!-- Pilihan Kategori -->
            <div class="form-group">
                <label for="Kategori">Kategori</label>
                <select class="form-control" id="kategori" name="kategori">
                    <option value="Berita UMKM" {{ $artikel->kategori == "Berita UMKM" ? "selected" : "" }}>Berita UMKM</option>
                    <option value="Produk UMKM" {{ $artikel->kategori == "Produk UMKM" ? "selected" : "" }}>Produk UMKM</option>
                    <option value="Dapur Marani" {{ $artikel->kategori == "Masakan" ? "selected" : "" }}>Masakan</option>
                </select>
            </div>

            <!-- Pilihan Status -->
            <div class="form-group">
                <label>Status</label><br>
                <input type="radio" id="Publish" name="status" value="Publish" {{ $artikel->status == "Publish" ? "checked" : "" }}>
                <label for="Status_publish">Publish</label><br>
                <input type="radio" id="Draft" name="status" value="Draft" {{ $artikel->status == "Draft" ? "checked" : "" }}>
                <label for="Status_Draft">Draft</label>
            </div>

            <!-- Konten Artikel -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Artikel</label>
                <textarea name="artikel" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $artikel->artikel }}</textarea>
            </div>

            <!-- Upload Gambar -->
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
                @if ($artikel->gambar)
                    <img src="{{ Storage::url($artikel->gambar) }}" class="h-48 mt-2" alt="Gambar Artikel" />
                @endif
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
