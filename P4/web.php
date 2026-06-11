<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
#use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MahasantriController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});
Route::redirect('/dashboard', '/home');

// Semua halaman AdminLTE dikelompokkan di sini agar wajib Login
Route::middleware(['auth', 'verified'])->group(function () {

    // 1. Dashboard Utama AdminLTE (Menampilkan Tabel Makanan)
    Route::get('/home', [FoodController::class, 'index'])->name('home');
    
    // 2. Halaman About (Visi & Misi)
    Route::get('/about', function () { return view('about'); })->name('about');
    
    // 3. Halaman Pages (Kartu Motivasi)
    Route::get('/motivation', function () { return view('motivation'); })->name('motivation');

    // 4. Proses Fitur Makanan
    Route::get('/food/create', [FoodController::class, 'create'])->name('foods.create');
    Route::post('/food/store', [FoodController::class, 'store'])->name('foods.store');

    // 5. Layouts
    Route::get('/layout', function () { return view('p4.layouts.index'); });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/pegawai', [PegawaiController::class, 'index']);
    Route::get('/mahasantri', [MahasantriController::class, 'index'])->name('mahasantri.index');
    Route::resource('/pegawai', PegawaiController::class);
    Route::get('/mahasantri/create', [MahasantriController::class, 'create'])->name('mahasantri.create');
    Route::post('/mahasantri/store', [MahasantriController::class, 'store'])->name('mahasantri.store');
});

require __DIR__.'/auth.php';