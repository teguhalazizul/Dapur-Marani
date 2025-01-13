@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Makanan</h1>
    <a href="{{ route('menus.create') }}" class="btn btn-primary mb-3">Add </a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)
                <tr>
                    <td>{{ $loop->iteration }}</td> <!-- Menambahkan nomor urut -->
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->description }}</td>
                    <td>{{ $menu->price }}</td>
                    <td>
                        @if($menu->image)
                            <img src="{{ asset('storage/' . $menu->image) }}" width="50" alt="Image">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('menus.edit', $menu) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('menus.destroy', $menu) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
