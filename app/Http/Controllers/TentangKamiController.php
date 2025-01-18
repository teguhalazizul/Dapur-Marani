<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangKamiController extends Controller
{
    // Menampilkan daftar Tentang Kami
    public function index()
    {
        $tentangkami = TentangKami::all();
        return view('tentangkami.index', compact('tentangkami'));
    }

    // Menampilkan form tambah Tentang Kami
    public function create()
    {
        return view('tentangkami.create');
    }

    // Menyimpan data Tentang Kami
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'jam_buka' => 'required',
            'lokasi' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'sejarah_singkat' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['judul', 'deskripsi', 'jam_buka', 'lokasi', 'visi', 'misi', 'sejarah_singkat']);

        // Menyimpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('images', 'public');
            $data['gambar'] = $path;
        }

        TentangKami::create($data);

        return redirect()->route('tentangkami.index')->with('success', 'Tentang Kami berhasil ditambahkan');
    }

    // Menampilkan form edit Tentang Kami
    public function edit(TentangKami $tentangkami)
    {
        return view('tentangkami.edit', compact('tentangkami'));
    }

    // Mengupdate data Tentang Kami
    public function update(Request $request, TentangKami $tentangkami)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'jam_buka' => 'required',
            'lokasi' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'sejarah_singkat' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['judul', 'deskripsi', 'jam_buka', 'lokasi', 'visi', 'misi', 'sejarah_singkat']);

        // Menyimpan gambar jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($tentangkami->gambar) {
                Storage::delete('public/' . $tentangkami->gambar);
            }

            $path = $request->file('gambar')->store('images', 'public');
            $data['gambar'] = $path;
        }

        $tentangkami->update($data);

        return redirect()->route('tentangkami.index')->with('success', 'Tentang Kami berhasil diperbarui');
    }

    // Menghapus data Tentang Kami
    public function destroy(TentangKami $tentangkami)
    {
        // Hapus gambar jika ada
        if ($tentangkami->gambar) {
            Storage::delete('public/' . $tentangkami->gambar);
        }

        $tentangkami->delete();

        return redirect()->route('tentangkami.index')->with('hapus', 'Tentang Kami berhasil dihapus');
    }
}
