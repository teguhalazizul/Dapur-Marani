@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Menu</h1>
    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Menu</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar Menu</label>
            <input type="file" class="form-control" id="gambar" name="gambar" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi Menu</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
        </div>
        <div class="form-group">
            <label for="harga">Harga Menu</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
