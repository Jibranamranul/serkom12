<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;






/*
|--------------------------------------------------------------------------
| HALAMAN AWAL
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/login');
});


/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);


/*
|--------------------------------------------------------------------------
| HALAMAN YANG HARUS LOGIN
|--------------------------------------------------------------------------
*/


Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');


    // Guru
    Route::get('/guru', [GuruController::class, 'index'])
        ->name('guru.index');


    // Profil Sekolah
    Route::get('/profil', function () {
        return view('profil.index');
    })->name('sekolah');

    // Siswa
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');


    // Ekstrakurikuler
    Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])
        ->name('ekstrakurikuler.index');

    // Galeri
    Route::get('/galeri', [GaleriController::class, 'index'])
        ->name('galeri');

    // Berita
Route::get('/berita', [BeritaController::class, 'index'])
    ->name('berita');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});