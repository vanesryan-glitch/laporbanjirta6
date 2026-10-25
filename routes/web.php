<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('laporan.form');
});

// Publik (warga tanpa login)
Route::get('/form', [LaporanController::class, 'form'])->name('laporan.form');
Route::post('/simpan', [LaporanController::class, 'simpan'])->name('laporan.simpan');

// Authentication
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

// Khusus petugas (wajib login)
Route::middleware('auth')->group(function () {
    Route::get('/daftar-laporan', [LaporanController::class, 'daftar'])->name('laporan.daftar');
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
});