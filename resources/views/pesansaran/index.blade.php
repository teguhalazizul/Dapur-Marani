<x-app-layout>
    <div class="max-w-2xl mx-auto p-4">
        <form method="POST" action="{{ route('pesan_saran.store') }}">
            @csrf

            <input type="text" name="nama" placeholder="Nama Anda" class="block w-full border-gray-300 rounded-md"
                value="{{ old('nama') }}" />
            <x-input-error :messages="$errors->get('nama')" class="mt-2" />

            <input type="email" name="email" placeholder="Email Anda"
                class="block w-full mt-4 border-gray-300 rounded-md" value="{{ old('email') }}" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <textarea name="pesan" placeholder="Apa yang ingin Anda sampaikan?"
                class="block w-full mt-4 border-gray-300 rounded-md">{{ old('pesan') }}</textarea>
            <x-input-error :messages="$errors->get('pesan')" class="mt-2" />

            <x-primary-button class="mt-4">Kirim Pesan</x-primary-button>
        </form>

        <div class="mt-6">
            @foreach ($pesansaran as $pesan)
                <div class="p-4 mb-4 bg-white rounded shadow">
                    <p><strong>Pesan:</strong> {{ $pesan->pesan }}</p>

                    @if ($pesan->email)
                        <p><strong>Kontak:</strong> {{ $pesan->email }}</p>
                    @endif

                    @if ($pesan->suggestion)
                        <p><strong>Saran:</strong> {{ $pesan->suggestion }}</p>
                    @endif
                    @if ($pesan->nama)
                        <p><strong>Nama:</strong> {{ $pesan->nama }}</p>
                    @endif
                    <p><small>Ditulis oleh: {{ $pesan->user->name }}</small></p>
                </div>
                <a href="{{ route('pesan_saran.edit', $pesan) }}"
                    class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                    <!-- Ikon Heroicons (Pencil Icon) -->
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit
                </a>


                <form action="{{ route('pesan_saran.destroy', $pesan) }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete this message?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                        <!-- Ikon Trash -->
                        <i class="fa-solid fa-trash"></i>
                        Delete
                    </button>
                </form>
            @endforeach
        </div>
    </div>
</x-app-layout>
.




