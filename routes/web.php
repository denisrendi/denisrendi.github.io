<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Route untuk login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk dashboard setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Route untuk menu Daftar Buku, Daftar Mahasiswa, Daftar Peminjaman, dll
Route::middleware('auth')->group(function () {
    Route::get('/daftarbuku', [BookController::class, 'index'])->name('daftarbuku');
    Route::get('/daftarmhs', [StudentController::class, 'index'])->name('daftarmhs');
    Route::get('/daftarpinjam', [LoanController::class, 'index'])->name('daftarpinjam');
    Route::get('/reportmahasiswa', [ReportController::class, 'reportMahasiswa'])->name('reportmahasiswa');
    Route::get('/reportbuku', [ReportController::class, 'reportBuku'])->name('reportbuku');
});

// Route untuk halaman utama login
Route::get('/', function () {
    return view('login');
});
