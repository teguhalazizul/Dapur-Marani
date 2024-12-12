@extends('layouts.app')

@section('content')
<div class="container py-8">
    <h1 class="text-3xl font-semibold mb-4">Daftar Menu</h1>
    <a href="{{ route('menu.create') }}" class="btn btn-primary bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">Tambah Menu</a>

    @if(session('success'))
        <div class="alert alert-success my-4 bg-green-200 text-green-800 p-4 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($menus as $menu)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:scale-105 transform transition-all">
            <img src="{{ asset('storage/'.$menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="font-bold text-xl mb-2">{{ $menu->nama }}</h2>
                <p class="text-gray-700 text-base mb-2">{{ Str::limit($menu->deskripsi, 100) }}</p>
                <p class="text-gray-900 font-semibold text-lg">{{ number_format($menu->harga, 0, ',', '.') }} IDR</p>
            </div>
            <div class="p-4 bg-gray-100 flex justify-between">
                <a href="{{ route('menu.edit', $menu->id) }}" class="bg-yellow-500 text-white py-2 px-4 rounded-lg hover:bg-yellow-600">Edit</a>
                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">Hapus</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
