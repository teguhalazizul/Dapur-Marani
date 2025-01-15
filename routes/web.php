<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PesanSaranController;
use App\Http\Controllers\SejarahSingkatController;
use App\Models\Artikel;
use App\Models\Footer;
use App\Models\HeroSection;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('artikel', ArtikelController::class)->only(['index', 'store','edit','destroy','update','create']);


Route::resource('hero-sections', HeroSectionController::class);

Route::resource('footers', FooterController::class);
require __DIR__.'/auth.php';


Route::match(['GET', 'POST'], '/homepage', function (Illuminate\Http\Request $request) {
    $footers = Footer::all();
    $heroSections = HeroSection::all();
    $artikel = Artikel::all();

    if ($request->isMethod('post')) {
        // Logika untuk menangani data POST
        $data = $request->all();
        // Lakukan sesuatu dengan data yang dikirim, seperti menyimpannya ke database.
    }

    return view('index', compact('footers', 'heroSections', 'artikel'));
});

Route::resource('pesan_saran', PesanSaranController::class)->only(['index', 'store','edit','destroy','update']);

Route::resource('sejarahsingkats', SejarahSingkatController::class);
