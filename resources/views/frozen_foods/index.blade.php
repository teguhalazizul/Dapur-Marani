<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar FrozenFood</h1>
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

        <a href="{{ route('frozen_foods.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Frozen
        </a>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Gambar</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Nama FrozenFood</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Deskripsi</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Harga</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($frozenFoods as $frozen_food)
                        <tr class="border-b">
                            <td class="px-4 py-2">
                                <img src="{{ Storage::url($frozen_food->image) }}" class="w-16 h-16 object-cover" alt="Gambar Frozen Food" />
                            </td>
                            <td class="px-4 py-2 text-sm">{{ $frozen_food->name }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600">{{ $frozen_food->description }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600">Rp. {{ number_format($frozen_food->price, 0, ',', '.') }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('frozen_foods.edit', $frozen_food->id) }}"
                                    class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    Edit
                                </a>
                                <form action="{{ route('frozen_foods.destroy', $frozen_food->id) }}" method="POST" class="inline ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                                        <i class="fa-solid fa-trash"></i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
