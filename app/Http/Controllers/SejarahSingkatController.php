<?php

namespace App\Http\Controllers;

use App\Models\SejarahSingkat;
use Illuminate\Http\Request;

class SejarahSingkatController extends Controller
{
    // Menampilkan daftar semua sejarah singkat
    public function index()
    {
        $sejarahsingkats = SejarahSingkat::all();
        return view('sejarahsingkats.index', compact('sejarahsingkats'));
    }

    // Menampilkan form untuk menambahkan sejarah singkat baru
    public function create()
    {
        return view('sejarahsingkats.create');
    }

    // Menyimpan sejarah singkat baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([

            'konten' => 'required',
        ]);

        SejarahSingkat::create($request->all());
        return redirect()->route('sejarahsingkats.index')->with('success', 'Sejarah Singkat berhasil ditambahkan.');
    }

    // Menampilkan detail dari sejarah singkat tertentu
    public function show(SejarahSingkat $sejarahsingkat)
    {
        return view('sejarahsingkats.show', compact('sejarahsingkat'));
    }

    // Menampilkan form untuk mengedit sejarah singkat yang ada
    public function edit(SejarahSingkat $sejarahsingkat)
    {
        return view('sejarahsingkats.edit', compact('sejarahsingkat'));
    }

    // Memperbarui sejarah singkat yang ada di database
    public function update(Request $request, SejarahSingkat $sejarahsingkat)
    {
        $request->validate([

            'konten' => 'required',
        ]);

        $sejarahsingkat->update($request->all());
        return redirect()->route('sejarahsingkats.index')->with('success', 'Sejarah Singkat berhasil diperbarui.');
    }

    // Menghapus sejarah singkat dari database
    public function destroy(SejarahSingkat $sejarahsingkat)
    {
        $sejarahsingkat->delete();
        return redirect()->route('sejarahsingkats.index')->with('success', 'Sejarah Singkat berhasil dihapus.');
    }
}
