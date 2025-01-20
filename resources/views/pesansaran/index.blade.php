<x-app-layout>
    <div class="max-w-6xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Daftar Pesan Saran Customer</h1>

        <!-- Tabel Daftar Pesan -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table id="pesan-saran-table" class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Nama</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Pesan</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Kontak (Email)</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Saran</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesansaran as $pesan)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm">{{ $pesan->nama }}</td>
                            <td class="px-4 py-2 text-sm">{{ $pesan->pesan }}</td>
                            <td class="px-4 py-2 text-sm">{{ $pesan->email }}</td>
                            <td class="px-4 py-2 text-sm">{{ $pesan->suggestion }}</td>
                            <td class="px-4 py-2 text-sm">
                                <form action="{{ route('pesan_saran.destroy', $pesan) }}" method="POST"
                                    onsubmit="return confirm('Apakah yakin ingin menghapus pesan saran ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Script DataTables -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('#pesan-saran-table').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json" // Bahasa Indonesia
                },
                responsive: true, // Tabel menjadi responsif
                autoWidth: false, // Disable auto width
            });
        });
    </script>
</x-app-layout>
