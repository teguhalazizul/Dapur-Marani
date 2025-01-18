<x-app-layout>
    @if ($errors->any())
        <div class="bg-red-500 text-white p-3 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Menu</h1>
        <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data"> 
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium">Name</label>
                <input type="text" name="name" value="{{ $menu->name }}" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Description</label>
                <textarea name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md">{{ $menu->description }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Price</label>
                <input type="number" step="0.01" name="price" value="{{ $menu->price }}" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Image</label>
                <input type="file" name="image" class="mt-1 block w-full border-gray-300 rounded-md" />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>