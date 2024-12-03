@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Menu</h1>
    <a href="{{ route('menu.create') }}" class="btn btn-primary">Tambah Menu</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->nama }}</td>
                <td>
                    <img src="{{ asset('storage/'.$menu->gambar) }}" width="100" alt="{{ $menu->nama }}">
                </td>
                <td>{{ $menu->deskripsi }}</td>
                <td>{{ $menu->harga }}</td>
                <td>
                    <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
