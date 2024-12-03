@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Menu</h1>
    <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Menu</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $menu->nama }}" required>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar Menu</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            <img src="{{ asset('storage/'.$menu->gambar) }}" width="100" alt="{{ $menu->nama }}">
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi Menu</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $menu->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga Menu</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $menu->harga }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
