<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanSaranController;
use App\Http\Controllers\FrozenFoodController;

Route::resource('frozen_foods', FrozenFoodController::class);

Route::resource('menus', MenuController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');

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
