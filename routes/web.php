<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/daftar-pasien', [PasienController::class, 'index'])->name('daftar-pasien.index');
Route::get('/tambah-pasien', [PasienController::class, 'create'])->name('tambah-pasien.create');
Route::get('/detail-pasien', [PasienController::class, 'show'])->name('detail-pasien.show');
Route::get('/edit-pasien', [PasienController::class, 'edit'])->name('edit-pasien.edit');


Route::get('/daftar-modul', [ModulController::class, 'index'])->name('daftar-modul.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';