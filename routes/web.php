<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GelombangController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//landing page-form
Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', [FormController::class, 'index'])->name('form');
Route::post('/form', [FormController::class, 'store'])->name('masuk');
Route::get('/confirm',  [FormController::class, 'thanks'])->name('thanks');

//log In-Out
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'funcLogin'])->name('login.function');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::resource('peserta', PesertaController::class);

    Route::middleware(['level:Administrator'])->group(function () {
        Route::resource('user', UserController::class);
        Route::resource('level', LevelController::class);
        Route::resource('jurusan', JurusanController::class);
        Route::resource('gelombang', GelombangController::class);
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/peserta/detail/{id}', [PesertaController::class, 'detail'])->name('peserta.detail');
    Route::post('status/{id}', [PesertaController::class, 'status']);
    Route::post('/gelombang/{id}/update-status', [GelombangController::class, 'status']);
});


// Route::get('/form/{id}', [FormController::class, 'index'])->name('form.index');
// Route::post('/cari_peserta', [PesertaController::class, 'cariPeserta'])->name('cari.jurusan');
