<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrozenFoodController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangKamiController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PesanSaranController;
use App\Http\Controllers\SejarahSingkatController;
use App\Models\Artikel;
use App\Models\Footer;
use App\Models\FrozenFood;
use App\Models\HeroSection;
use App\Models\Menu;
use App\Models\PesanSaran;
use App\Models\TentangKami;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    // Get the counts for each model
    $menuCount = Menu::count();
    $frozenFoodCount = FrozenFood::count();
    $pesanSaranCount = PesanSaran::count();

    // Pass counts to the view
    return view('dashboard', compact('menuCount', 'frozenFoodCount', 'pesanSaranCount'));
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


Route::match(['GET', 'POST'], '/', function (Illuminate\Http\Request $request) {
    
    $footers = Footer::all();
    $heroSections = HeroSection::all();
    $artikel = Artikel::all();
    $menus = Menu::all();
    $tentangkami = TentangKami::all();

    if ($request->isMethod('post')) {
        // Logika untuk menangani data POST
        $data = $request->all();
        // Lakukan sesuatu dengan data yang dikirim, seperti menyimpannya ke database.
    }

    return view('index', compact('footers', 'heroSections', 'artikel', 'menus','tentangkami'));
})->name('homepage');


Route::resource('pesan_saran', PesanSaranController::class)->only(['index', 'store','edit','destroy','update']);

Route::resource('sejarahsingkats', SejarahSingkatController::class);

Route::resource('menus', MenuController::class);


Route::resource('frozen_foods', FrozenFoodController::class);

Route::get('/menu', function () {
    $footers = Footer::all();
    $menus = Menu::all();
    $frozenFoods = FrozenFood::all();
    return view('menu',compact('footers','menus','frozenFoods')); // Mengirim data menus ke view
})->name('menu.menu'); // Menambahkan nama route




Route::resource('tentangkami', TentangKamiController::class)->only(['index', 'store','edit','destroy','update','create']);


