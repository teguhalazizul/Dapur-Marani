<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanSaranController;
use App\Http\Controllers\FrozenFoodController;

// Group resource routes untuk 'menus' dan 'frozen_foods'
Route::resource('frozen_foods', FrozenFoodController::class);
Route::resource('menus', MenuController::class);

// Route halaman statis
Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing.index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/homepage', function () {
    return view('index');
});

// Route Dashboard, hanya bisa diakses oleh user yang sudah login dan terverifikasi
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Group route dengan middleware 'auth' untuk akses profil dan pesan_saran
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('pesan_saran', PesanSaranController::class)->only(['index', 'store','edit','destroy','update']);
});

// Require routes autentikasi
require __DIR__.'/auth.php';
