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
        <h1 class="text-2xl font-bold mb-4">Tambah Artikel</h1>
        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Tanggal</label>
                <input type="date" name="tanggal" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Judul</label>
                <input type="text" name="judul" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>
            <div class="form-group">
                <label for="Kategori">Kategori</label>
                <select class="form-control" id="kategori" name="kategori">
                    <option value="Berita UMKM">Berita UMKM</option>
                    <option value="Produk UMKM">Produk UMKM</option>
                    <option value="Masakan">Masakan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Status</label><br>
                <input type="radio" id="Publish" name="status" value="Publish">
                <label for="Status_publish">Publish</label><br>
                <input type="radio" id="Draft" name="status" value="Draft">
                <label for="Status_Draft">Draft</label>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Artikel</label>
                <textarea name="artikel" id="editor" rows="5" class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
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
