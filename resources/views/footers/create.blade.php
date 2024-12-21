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
        <h1 class="text-2xl font-bold mb-4">Tambah Footer</h1>
        <form action="{{ route('footers.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-medium">Judul</label>
                <input type="text" name="judul" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">WhatsApp URL</label>
                <input type="url" name="whatsapp_url" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Instagram URL</label>
                <input type="url" name="instagram_url" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
