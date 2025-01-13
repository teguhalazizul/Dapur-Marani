@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Frozen Foods</h1>
    <a href="{{ route('frozen_foods.create') }}" class="btn btn-primary mb-3">Add Frozen Food</a>

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
            @foreach($frozenFoods as $frozenFood)
                <tr>
                    <td>{{ $loop->iteration }}</td> <!-- Nomor urut yang dinamis -->
                    <td>{{ $frozenFood->name }}</td>
                    <td>{{ $frozenFood->description }}</td>
                    <td>{{ $frozenFood->price }}</td>
                    <td>
                        @if($frozenFood->image)
                            <img src="{{ asset('storage/' . $frozenFood->image) }}" width="50" alt="{{ $frozenFood->name }}">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('frozen_foods.edit', $frozenFood->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('frozen_foods.destroy', $frozenFood->id) }}" method="POST" class="d-inline">
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
