<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

