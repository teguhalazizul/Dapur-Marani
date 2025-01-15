<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Footer;
use App\Models\HeroSection;
use Illuminate\View\View;
use App\Models\PesanSaran;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class PesanSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :View
    {
        $pesansaran = PesanSaran::all();
        return view('pesansaran.index', compact('pesansaran'));
         // Menampilkan view form input pesan dan saran
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi data yang diinput oleh pengguna
    $validated = $request->validate([
        'nama' => 'required|string|max:255', // Nama harus diisi dan tidak lebih dari 255 karakter
        'email' => 'required|email|max:255', // Email harus diisi, valid, dan tidak lebih dari 255 karakter
        'pesan' => 'required|string', // Pesan harus diisi
    ]);

    // Menyimpan data ke database melalui relasi user
    $request->user()->pesanSaran()->create($validated);

    // Mengambil data yang diperlukan untuk ditampilkan di view
    $footers = Footer::all();
    $heroSections = HeroSection::all();
    $artikel = Artikel::all();

    // Mengembalikan view 'index' dengan pesan sukses dan data yang diperlukan
    return view('index', [
        'footers' => $footers,
        'heroSections' => $heroSections,
        'artikel' => $artikel,
        'success' => 'Pesan Saran berhasil dikirim', // Pesan sukses
    ]);
}


    /**
     * Display the specified resource.
     */
    public function show(PesanSaran $pesanSaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id):View
    {
        // Mengambil data PesanSaran Berdasarkan ID
        $pesanSaran = PesanSaran::findOrFail($id);

        // Mengembalikan view untuk edit dengan data yang diambil
        return view('pesansaran.edit',compact('pesanSaran'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        // Validasi input yang diberikan Pengguna
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email'=> 'required|email|max:255',
            'pesan'=> 'required|string',
        ]);


        // Cari data PesanSaran berdasarkan ID dan update
        $pesanSaran = PesanSaran::findOrFail($id);
        $pesanSaran->update($validated);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pesan_saran.index')->with('success','Pesan Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PesanSaran $pesanSaran): RedirectResponse
    {
        // Otroisasi jika diperlukan
        // $this->authorize('delete', $pesanSaran);


        // Hapus pesan saran
        $pesanSaran->delete();

        // Redirect setelah penghapusan
        return redirect()->route('pesan_saran.index')->with('succes','Pesan Saran Berhasil dihapus');
    }

}
