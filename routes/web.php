<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanSaranController;

Route::resource('menu', MenuController::class);

Route::get('/', function () {
    return view('welcome');
});

// Menggabungkan kedua route yang bertentangan
Route::get('/about', function () {
    return view('about');
});

Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');

// Menghapus route yang bertentangan dan menjaga route homepage
Route::get('/homepage', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('pesan_saran', PesanSaranController::class)->only(['index', 'store','edit','destroy','update']);
});

require __DIR__.'/auth.php';
