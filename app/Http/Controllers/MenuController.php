<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    public function create()
    {
        return view('menus.create');
    }

    public function store(Request $request)
    {
        try {
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

            $path = $request->hasFile('image')
                ? $request->file('image')->store('images', 'public')
                : null;

            Menu::create(array_merge($validated, ['image' => $path]));

            return redirect()->route('menus.index')->with('success', 'Menu berhasil dibuat.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan saat membuat menu: ' . $e->getMessage()]);
        }
    }

    public function edit(Menu $menu)
    {
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        try {
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

            $path = $menu->image;

            if ($request->hasFile('image')) {
                if ($menu->image && Storage::exists('public/' . $menu->image)) {
                    Storage::delete('public/' . $menu->image);
                }
                $path = $request->file('image')->store('images', 'public');
            }

            $menu->update(array_merge($validated, ['image' => $path]));

            return redirect()->route('menus.index')->with('success', 'Menu berhasil diperbarui.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan saat memperbarui menu: ' . $e->getMessage()]);
        }
    }

    public function destroy(Menu $menu)
    {
        try {
            if ($menu->image && Storage::exists('public/' . $menu->image)) {
                Storage::delete('public/' . $menu->image);
            }

            $menu->delete();

            return redirect()->route('menus.index')->with('success', 'Menu berhasil dihapus.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan saat menghapus menu: ' . $e->getMessage()]);
        }
    }
}
