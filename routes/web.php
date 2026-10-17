<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// --- ROUTE PUBLIC ---
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// --- ROUTE TERKUNCI ---
Route::middleware('auth')->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // 1. ROUTE SIRKULASI
    Route::get('/sirkulasi', function () {
        return view('sirkulasi.index');
    })->name('sirkulasi.index');

    // 2. ROUTE DUMMY UNTUK MENU LAINNYA (Agar sidebar bisa diklik)
    Route::get('/books', function () { return "Halaman Katalog Buku (Segera Hadir)"; })->name('books.index');
    Route::get('/copies', function () { return "Halaman Data Eksemplar (Segera Hadir)"; })->name('copies.index');
    Route::get('/categories', function () { return "Halaman Kategori (Segera Hadir)"; })->name('categories.index');
    Route::get('/authors', function () { return "Halaman Pengarang (Segera Hadir)"; })->name('authors.index');
    Route::get('/publishers', function () { return "Halaman Penerbit (Segera Hadir)"; })->name('publishers.index');
    Route::get('/members', function () { return "Halaman Data Anggota (Segera Hadir)"; })->name('members.index');
    Route::get('/reservations', function () { return "Halaman Reservasi (Segera Hadir)"; })->name('reservations.index');
    Route::get('/fines', function () { return "Halaman Denda (Segera Hadir)"; })->name('fines.index');
    Route::get('/history', function () { return "Halaman Log Aktivitas (Segera Hadir)"; })->name('history.index');
    Route::get('/users', function () { return "Halaman Manajemen Pengguna (Segera Hadir)"; })->name('users.index');
    Route::get('/settings', function () { return "Halaman Pengaturan (Segera Hadir)"; })->name('settings.index');

});

// Redirect halaman utama ke dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});