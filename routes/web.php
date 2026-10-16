<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('laporan.form');
});

Route::get('/form', [LaporanController::class, 'form'])->name('laporan.form');
Route::post('/simpan', [LaporanController::class, 'simpan'])->name('laporan.simpan');
Route::get('/daftar-laporan', [LaporanController::class, 'daftar'])->name('laporan.daftar');