<?php

namespace App\Http\Controllers;

use App\Models\FrozenFood; // Ensure you're using the correct model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrozenFoodController extends Controller
{
    public function index()
    {
        // Ensure using the correct model, if it's FrozenFood, use it consistently
        $frozenFoods = FrozenFood::all();
        return view('frozen_foods.index', compact('frozenFoods'));
    }

    public function create()
    {
        return view('frozen_foods.create');
    }

    public function store(Request $request)
    {
        try {
            // Validate input
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ], [
                'name.required' => 'Nama menu harus diisi.',
                'description.required' => 'Deskripsi menu harus diisi.',
                'price.required' => 'Harga menu harus diisi.',
                'price.numeric' => 'Harga harus berupa angka.',
                'image.image' => 'File harus berupa gambar.',
            ]);

            // Handle image upload
            $imagePath = $request->hasFile('image')
                ? $request->file('image')->store('images', 'public')
                : null;

            // Create a new record
            FrozenFood::create(array_merge($validated, ['image' => $imagePath]));

            return redirect()->route('frozen_foods.index')->with('success', 'Menu berhasil dibuat.');
        } catch (\Exception $e) {
            // Handle error
            return back()->withErrors(['error' => 'Terjadi kesalahan saat membuat menu: ' . $e->getMessage()]);
        }
    }

    public function edit(FrozenFood $frozenFood)
    {
        return view('frozen_foods.edit', compact('frozenFood'));
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // optional image upload
        ]);

        // Find the record
        $frozenFood = FrozenFood::findOrFail($id);

        // Update record with validated data
        $frozenFood->update($validated);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($frozenFood->image && Storage::exists('public/' . $frozenFood->image)) {
                Storage::delete('public/' . $frozenFood->image);
            }

            // Store the new image and update the record
            $imagePath = $request->file('image')->store('public/frozen_foods');
            $frozenFood->image = basename($imagePath);
            $frozenFood->save();
        }

        return redirect()->route('frozen_foods.index')->with('success', 'Frozen Food updated successfully');
    }

    public function destroy(FrozenFood $frozenFood)
    {
        try {
            // Delete the image if it exists
            if ($frozenFood->image && Storage::exists('public/' . $frozenFood->image)) {
                Storage::delete('public/' . $frozenFood->image);
            }

            // Delete the record
            $frozenFood->delete();

            return redirect()->route('frozen_foods.index')->with('success', 'Menu berhasil dihapus.');
        } catch (\Exception $e) {
            // Handle error
            return back()->withErrors(['error' => 'Terjadi kesalahan saat menghapus menu: ' . $e->getMessage()]);
        }
    }
}
