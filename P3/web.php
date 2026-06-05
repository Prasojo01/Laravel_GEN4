<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MahasiswaController;

// Tugas 1
Route::get('/profil', [ProfilController::class, 'index']);

// Tugas 2
Route::get('/produk', [ProdukController::class, 'index']);

// Tugas 3
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

//Route dengan value

Route::get('/hello', function () {
    return "Hello Mas Galang";
});

//Route dengan parameter

Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

//Route redirect views

Route::get('/kabar', function () {
    return view('p3.kondisi');
});

//Route to UserController
Route::get("/user", [UserController::class, 'index']);

//Route to santri
Route::get("/santri", [SantriController::class, 'datasantri']);