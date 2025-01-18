<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4"> Hero Sections</h1>
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

        <!-- <a href="{{ route('hero-sections.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Hero Section
        </a> -->

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Gambar</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Headline</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Tagline</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Deskripsi</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($heroSections as $section)
                        <tr class="border-b">
                            <td class="px-4 py-2">
                                <img src="{{ Storage::url($section->gambar) }}" class="w-16 h-16 object-cover" alt="Gambar Hero Section" />
                            </td>
                            <td class="px-4 py-2 text-sm">{{ $section->headline }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600">{{ $section->tagline }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600">{{ $section->deskripsi }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('hero-sections.edit', $section->id) }}"
                                    class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                                    Edit
                                </a>
                                <!-- <form action="{{ route('hero-sections.destroy', $section->id) }}" method="POST" class="inline ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                                        Delete
                                    </button>
                                </form> -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
