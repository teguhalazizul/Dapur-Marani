<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Berita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'artikel' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ], [
            'tanggal.required' => 'Tanggal harus berupa date ',
            'judul.required' => 'Judul wajib diisi ',
            'kategori.required' => 'Kategori tidak boleh kosong ',
            'status.required' => 'Status tidak boleh kosong ',
            'artikel.required' => 'Artikel tidak boleh kosong ',
            'judul.max' => 'Tidak boleh lebih dari 255 karakter',
            'kategori.max' => 'Tidak boleh lebih dari 255 karakter.',
            'status.max' => 'Tidak boleh lebih dari 255 karakter.',
            'artikel.max' => 'Tidak boleh lebih dari 255 karakter.',
            'gambar.image' => 'File yang diupload harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus jpg, jpeg, atau png.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.'
        ]);

        $artikel = new Artikel();
        $artikel->tanggal = $request->tanggal;
        $artikel->judul = $request->judul;
        $artikel->kategori = $request->kategori;
        $artikel->status = $request->status;
        $artikel->artikel = $request->artikel;

        if ($request->hasFile('gambar')) {
            $artikel->gambar = $request->file('gambar')->store('images', 'public');
        }

        $artikel->save();

        return redirect()->route('artikel.index')->with('success', "Artikel berhasil ditambah");
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        return view('artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel): RedirectResponse
    {
        $request->validate([
            'tanggal' => 'required',
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'artikel' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ], [
            'tanggal.required' => 'Tanggal harus berupa date ',
            'judul.required' => 'Judul wajib diisi ',
            'kategori.required' => 'Kategori tidak boleh kosong ',
            'status.required' => 'Status tidak boleh kosong ',
            'artikel.required' => 'Artikel tidak boleh kosong ',
            'judul.max' => 'Tidak boleh lebih dari 255 karakter',
            'kategori.max' => 'Tidak boleh lebih dari 255 karakter.',
            'status.max' => 'Tidak boleh lebih dari 255 karakter.',
            'artikel.max' => 'Tidak boleh lebih dari 255 karakter.',
            'gambar.image' => 'File yang diupload harus berupa gambar.',
            'gambar.mimes' => 'Format gambar harus jpg, jpeg, atau png.',
            'gambar.max' => 'Ukuran gambar maksimal 2MB.'
        ]);

        $artikel->tanggal = $request->tanggal;
        $artikel->judul = $request->judul;
        $artikel->kategori = $request->kategori;
        $artikel->status = $request->status;
        $artikel->artikel = $request->artikel;

        if ($request->hasFile('gambar')) {
            if ($artikel->gambar) {
                Storage::delete('public/' . $artikel->gambar);
            }
            $artikel->gambar = $request->file('gambar')->store('images', 'public');
        }

        $artikel->save();
        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        if ($artikel->gambar) {
            Storage::delete('public/' . $artikel->gambar);
        }
        $artikel->delete();
        return redirect()->route('artikel.index')->with('hapus', 'Artikel berhasil dihapus');
    }
}
