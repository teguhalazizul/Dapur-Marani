<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    // Menampilkan daftar footer
    public function index()
    {
        $footers = Footer::all();
        return view('footers.index', compact('footers'));
    }

    // Menampilkan form untuk membuat footer baru
    public function create()
    {
        return view('footers.create');
    }

    // Menyimpan footer baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'whatsapp_url' => 'required|url',
            'instagram_url' => 'required|url',
        ]);

        Footer::create($validated);

        return redirect()->route('footers.index')->with('success', 'Footer berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit footer
    public function edit(Footer $footer)
    {
        return view('footers.edit', compact('footer'));
    }

    // Memperbarui footer
    public function update(Request $request, Footer $footer)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'whatsapp_url' => 'required|url',
            'instagram_url' => 'required|url',
        ]);

        $footer->update($validated);

        return redirect()->route('footers.index')->with('success', 'Footer berhasil diperbarui!');
    }

    // Menghapus footer
    public function destroy(Footer $footer)
    {
        $footer->delete();

        return redirect()->route('footers.index')->with('success', 'Footer berhasil dihapus!');
    }
}
