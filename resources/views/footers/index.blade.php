<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Footer</h1>
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

        <a href="{{ route('footers.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Footer
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($footers as $footer)
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-lg font-bold">{{ $footer->judul }}</h2>
                    <p class="text-gray-600 mt-2">{{ $footer->deskripsi }}</p>
                    <p class="text-gray-600 mt-2">WhatsApp: <a href="{{ $footer->whatsapp_url }}" class="text-blue-500">{{ $footer->whatsapp_url }}</a></p>
                    <p class="text-gray-600 mt-2">Instagram: <a href="{{ $footer->instagram_url }}" class="text-blue-500">{{ $footer->instagram_url }}</a></p>

                    <div class="mt-4">
                        <a href="{{ route('footers.edit', $footer->id) }}"
                            class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                            Edit
                        </a>
                        <form action="{{ route('footers.destroy', $footer->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
