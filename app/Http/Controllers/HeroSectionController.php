<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    // Menampilkan daftar Hero Section
    public function index()
    {
        $heroSections = HeroSection::all();
        return view('hero-sections.index', compact('heroSections'));
    }

    // Menampilkan form untuk membuat Hero Section baru
    public function create()
    {
        return view('hero-sections.create');
    }

    // Menyimpan Hero Section baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tagline' => 'required|string|max:255',
            'headline' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('hero-sections', 'public');
        }

        HeroSection::create($validated);

        return redirect()->route('hero-sections.index')->with('success', 'Hero Section berhasil dibuat.');
    }

    // Menampilkan form untuk mengedit Hero Section
    public function edit(HeroSection $heroSection)
    {
        return view('hero-sections.edit', compact('heroSection'));
    }

    // Memperbarui Hero Section
    public function update(Request $request, HeroSection $heroSection)
    {
        $validated = $request->validate([
            'tagline' => 'required|string|max:255',
            'headline' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($heroSection->gambar) {
                Storage::disk('public')->delete($heroSection->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('hero-sections', 'public');
        }

        $heroSection->update($validated);

        return redirect()->route('hero-sections.index')->with('success', 'Hero Section berhasil diperbarui.');
    }

    // Menghapus Hero Section
    public function destroy(HeroSection $heroSection)
    {
        if ($heroSection->gambar) {
            Storage::disk('public')->delete($heroSection->gambar);
        }

        $heroSection->delete();

        return redirect()->route('hero-sections.index')->with('success', 'Hero Section berhasil dihapus.');
    }
}
