<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\PesanSaranController;
use App\Http\Controllers\SejarahSingkatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('index');

});

Route::get('/web', function () {
    return view('login');

});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('pesan_saran', PesanSaranController::class)->only(['index', 'store','edit','destroy','update']);

    Route::resource('sejarahsingkats', SejarahSingkatController::class);
    Route::resource('tentangkami', tentangkamiController::class);
    
});

require __DIR__.'/auth.php';
