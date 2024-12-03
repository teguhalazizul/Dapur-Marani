<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Menampilkan daftar menu
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }

    public function create()
    {
        // Menampilkan form tambah menu
        return view('menu.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,gif',
        ]);

        // Menyimpan gambar
        $gambarPath = $request->file('gambar')->store('images', 'public');

        // Menyimpan data menu
        Menu::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $gambarPath,  // Simpan path gambar
        ]);

        return redirect()->route('menu.index')->with('success', 'Menu berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Menampilkan form edit menu
        $menu = Menu::findOrFail($id);
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
        ]);

        $menu = Menu::findOrFail($id);
        $menu->nama = $request->nama;
        $menu->deskripsi = $request->deskripsi;
        $menu->harga = $request->harga;

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('blade/images', 'public');
            $menu->gambar = $gambarPath;
        }

        $menu->save();

        return redirect()->route('menu.index')->with('success', 'Menu updated successfully');
    }


    public function destroy($id)
    {
        // Menghapus menu
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus');
    }
}
