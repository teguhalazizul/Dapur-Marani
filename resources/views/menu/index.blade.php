@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Title Section -->
    <h1 class="my-4 text-center" style="font-size: 3rem; font-family: 'Poppins', sans-serif; font-weight: 700; color: #121110;">DAFTAR MENU</h1>
    <a href="{{ route('menu.create') }}" class="btn btn-primary mb-4">Tambah Menu</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Menu Cards Section -->
    <div class="row">
        @foreach($menus as $menu)
        <div class="col-md-4 col-sm-6 mb-4">
            <!-- Card Container with Consistent Border Radius -->
            <div class="card h-100 shadow-lg rounded-3" style="border-radius: 20px; background: linear-gradient(to bottom, #f47ae6, #89b0eb, #c9b2d4);">
                <div class="position-relative">
                    <!-- Image Section with Consistent Border Radius -->
                    <img src="{{ asset('storage/'.$menu->gambar) }}" class="card-img-top" alt="{{ $menu->nama }}" style="height: 250px; object-fit: cover; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $menu->nama }}</h5>
                    <p class="card-text text-muted">{{ Str::limit($menu->deskripsi, 50, '...') }}</p>
                    <p class="text-dark font-weight-bold">Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>
                    <!-- Edit and Delete Buttons Aligned to Left in the Grid -->
                    <div class="d-flex justify-content-start mt-auto">
                        <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                        <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
