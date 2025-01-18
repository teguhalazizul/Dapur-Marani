<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Footer;
use App\Models\HeroSection;
use App\Models\Menu;
use App\Models\PesanSaran;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PesanSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pesansaran = PesanSaran::all(); // Ambil semua data pesan saran
        $menus = Menu::all(); // Ambil semua data menu
        return view('pesansaran.index', compact('pesansaran', 'menus')); // Tampilkan ke view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        // Simpan data ke tabel pesan_saran
        PesanSaran::create($validated);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->route('homepage')->with('success', 'Pesan Saran berhasil dikirim');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        // Cari data pesan_saran berdasarkan ID
        $pesanSaran = PesanSaran::findOrFail($id);

        // Tampilkan form edit
        return view('pesansaran.edit', compact('pesanSaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        // Validasi data input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'pesan' => 'required|string',
        ]);

        // Cari data pesan_saran berdasarkan ID dan update
        $pesanSaran = PesanSaran::findOrFail($id);
        $pesanSaran->update($validated);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pesan_saran.index')->with('success', 'Pesan Saran berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        // Cari data pesan_saran berdasarkan ID dan hapus
        $pesanSaran = PesanSaran::findOrFail($id);
        $pesanSaran->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pesan_saran.index')->with('success', 'Pesan Saran berhasil dihapus');
    }
}
