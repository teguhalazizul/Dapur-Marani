@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="text-center text-2xl font-semibold mb-6">Edit Menu</h1>
    <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Nama Menu -->
        <div class="form-group mb-4">
            <label for="nama" class="block text-lg font-semibold text-gray-700">Nama Menu</label>
            <input type="text" class="form-control w-full p-3 border border-gray-300 rounded-lg" id="nama" name="nama" value="{{ old('nama', $menu->nama) }}" required>
        </div>

        <!-- Gambar Menu -->
        <div class="form-group mb-4">
            <label for="gambar" class="block text-lg font-semibold text-gray-700">Gambar Menu</label>
            <div class="mb-3">
                @if($menu->gambar)
                    <img src="{{ asset('storage/'.$menu->gambar) }}" width="100" alt="{{ $menu->nama }}" class="rounded">
                @endif
            </div>
            <input type="file" class="form-control w-full p-3 border border-gray-300 rounded-lg" id="gambar" name="gambar">
        </div>

        <!-- Deskripsi Menu -->
        <div class="form-group mb-4">
            <label for="deskripsi" class="block text-lg font-semibold text-gray-700">Deskripsi Menu</label>
            <textarea class="form-control w-full p-3 border border-gray-300 rounded-lg" id="deskripsi" name="deskripsi" rows="4" required>{{ old('deskripsi', $menu->deskripsi) }}</textarea>
        </div>

        <!-- Harga Menu -->
        <div class="form-group mb-4">
            <label for="harga" class="block text-lg font-semibold text-gray-700">Harga Menu</label>
            <input type="number" class="form-control w-full p-3 border border-gray-300 rounded-lg" id="harga" name="harga" value="{{ old('harga', $menu->harga) }}" required>
        </div>

        <!-- Button Simpan -->
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary px-6 py-2 rounded-lg">Simpan</button>
        </div>
    </form>
</div>
@endsection
