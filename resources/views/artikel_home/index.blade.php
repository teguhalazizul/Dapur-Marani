<div class="max-w-4xl mx-auto py-10">
<a href="{{ route('homepage') }}" 
class="btn-transform">
       Kembali ke Homepage
    </a>
    <h1 class="text-3xl font-bold text-teal-600 mb-4">{{ $artikel->judul }}</h1>
    
    <!-- Gambar artikel -->
    <img src="{{ Storage::url($artikel->gambar) }}" 
         class="w-full h-auto rounded-lg shadow-md mb-4" 
         alt="Gambar Artikel" />
    
    <!-- Informasi Artikel -->
    <p class="text-gray-600 text-sm mb-2">{{ $artikel->tanggal }}</p>
    <p class="text-gray-600 text-sm mb-4 font-semibold">Kategori: {{ $artikel->kategori }}</p>
    
    <!-- Isi Artikel -->
    <div class="text-gray-700 leading-relaxed">
        {!! $artikel->artikel !!}
    </div>
    
    <!-- Tombol Kembali -->
    
</div>
