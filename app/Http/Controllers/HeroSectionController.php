<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HeroSectionController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::all();
        return view('hero-sections.index', compact('heroSections'));
    }

    public function create()
    {
        return view('hero-sections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tagline' => 'required',
            'headline' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $gambarPath = $request->file('gambar') ? $request->file('gambar')->store('hero-sections', 'public') : null;

        HeroSection::create([
            'tagline' => $request->tagline,
            'headline' => $request->headline,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('hero-sections.index')->with('success', 'Hero Section created successfully.');
    }

    public function edit(HeroSection $heroSection)
    {
        return view('hero-sections.edit', compact('heroSection'));
    }

    public function update(Request $request, HeroSection $heroSection)
    {
        $request->validate([
            'tagline' => 'required',
            'headline' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($heroSection->gambar) {
                Storage::disk('public')->delete($heroSection->gambar);
            }
            $heroSection->gambar = $request->file('gambar')->store('hero-sections', 'public');
        }

        $heroSection->update([
            'tagline' => $request->tagline,
            'headline' => $request->headline,
            'deskripsi' => $request->deskripsi,
            'gambar' => $heroSection->gambar,
        ]);

        return redirect()->route('hero-sections.index')->with('success', 'Hero Section updated successfully.');
    }

    public function destroy(HeroSection $heroSection)
    {
        if ($heroSection->gambar) {
            Storage::disk('public')->delete($heroSection->gambar);
        }
        $heroSection->delete();
        return redirect()->route('hero-sections.index')->with('success', 'Hero Section deleted successfully.');
    }
}
