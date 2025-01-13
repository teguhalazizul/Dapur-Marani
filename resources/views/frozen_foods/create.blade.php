@extends('layouts.app')

@section('content')
<h1>Tambah Frozen Food</h1>
<form action="{{ route('frozen_foods.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Deskripsi</label>
        <textarea id="description" name="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="price">Harga</label>
        <input type="number" id="price" name="price" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="image">Gambar</label>
        <input type="file" id="image" name="image" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
