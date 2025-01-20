<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Menu</h1>

        <!-- Tombol Tambah Menu -->
        <a href="{{ route('menus.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Menu
        </a>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table id="menu-table" class="min-w-full table-auto display">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Gambar</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Nama Menu</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Deskripsi</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Harga</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($menus as $menu)
                        <tr>
                            <td class="px-4 py-2">
                                <img src="{{ Storage::url($menu->image) }}" class="w-16 h-16 object-cover" alt="Gambar Menu" />
                            </td>
                            <td class="px-4 py-2 text-sm">{{ $menu->name }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600">{{ $menu->description }}</td>
                            <td class="px-4 py-2 text-sm text-gray-600">Rp. {{ number_format($menu->price, 0, ',', '.') }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('menus.edit', $menu->id) }}"
                                    class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                                    Edit
                                </a>
                                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="inline ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4 text-gray-600">Tidak ada data menu ditemukan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tambahkan skrip DataTables -->
    <script>
        $(document).ready(function () {
            $('#menu-table').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json" // Gunakan bahasa Indonesia
                }
            });
        });
    </script>
</x-app-layout>
