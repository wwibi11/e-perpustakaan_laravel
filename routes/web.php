<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// --- ROUTE PUBLIC ---
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// --- ROUTE TERKUNCI ---
Route::middleware('auth')->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // PERBAIKAN: pastikan namanya 'dashboard' (bukan 'dashboard.index')
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/sirkulasi', function () {
        return view('sirkulasi.index');
    })->name('sirkulasi.index');

});

// Redirect halaman utama ke dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});