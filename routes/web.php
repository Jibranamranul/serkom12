<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UserController;






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
Route::middleware(['auth', 'role:operator'])->group(function () {
    Route::resource('pengguna', UserController::class);
});


Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');


    // Guru
// Guru - semua user yang login boleh melihat
    Route::get('/guru', [GuruController::class, 'index'])
        ->name('guru.index');


    // Guru - hanya operator yang boleh mengelola
    Route::middleware(['role:operator'])->group(function () {

        Route::get('/guru/create', [GuruController::class, 'create'])
            ->name('guru.create');

        Route::post('/guru', [GuruController::class, 'store'])
            ->name('guru.store');

        Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])
            ->name('guru.edit');

        Route::put('/guru/{id}', [GuruController::class, 'update'])
            ->name('guru.update');

        Route::delete('/guru/{id}', [GuruController::class, 'destroy'])
            ->name('guru.destroy');
    });

    // Profil Sekolah
    Route::get('/profil', function () {
        return view('profil.index');
    })->name('sekolah');

    // Siswa
    // Siswa - semua user yang login boleh melihat
    Route::get('/siswa', [SiswaController::class, 'index'])
        ->name('siswa.index');

    // Siswa - hanya operator yang boleh mengelola
    Route::middleware(['role:operator'])->group(function () {

        Route::get('/siswa/create', [SiswaController::class, 'create'])
            ->name('siswa.create');

        Route::post('/siswa', [SiswaController::class, 'store'])
            ->name('siswa.store');

        Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])
            ->name('siswa.edit');

        Route::put('/siswa/{id}', [SiswaController::class, 'update'])
            ->name('siswa.update');

        Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])
            ->name('siswa.destroy');
    });


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