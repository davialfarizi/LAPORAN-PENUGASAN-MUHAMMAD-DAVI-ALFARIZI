<?php

use App\Http\Controllers\AkademikController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin,dosen,mahasiswa'])->group(function () {
    Route::get('/dashboard', [AkademikController::class, 'dashboard'])->name('dashboard');
    Route::get('/lihat-materi', [AkademikController::class, 'lihatMateri'])->name('lihat.materi');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/manajemen-pengguna', [AkademikController::class, 'manajemenPengguna'])->name('manajemen.pengguna');
});

Route::middleware(['auth', 'role:admin,dosen'])->group(function () {
    Route::get('/kelola-materi', [AkademikController::class, 'kelolaMateri'])->name('kelola.materi');
    Route::get('/kelola-nilai', [AkademikController::class, 'kelolaNilai'])->name('kelola.nilai');
});

Route::middleware(['auth', 'role:admin,mahasiswa'])->group(function () {
    Route::get('/lihat-nilai', [AkademikController::class, 'lihatNilai'])->name('lihat.nilai');
});