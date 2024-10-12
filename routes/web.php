<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CatatanKesehatanController;
use App\Http\Controllers\User\DokterController;
use App\Http\Controllers\User\DukunganSosialController;
use App\Http\Controllers\User\KontrolAktivitasController;
use App\Http\Controllers\User\PengingatObatController;
use App\Http\Controllers\User\PolaMakanController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome.greet');
});
Route::get('/diabe-sweet', function () {
    return view('welcome.diabe');
})->name('diabe');

//Admin Routes
Route::middleware(['auth', 'verified', 'rolemanager:admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
});

//user Routes
Route::middleware(['auth', 'verified', 'rolemanager:user'])->prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/kesehatan', [CatatanKesehatanController::class, 'kesehatan'])->name('kesehatan');
    Route::post('/kesehatan/simpan', [CatatanKesehatanController::class, 'storeOrUpdate'])->name('kesehatan.simpan');
    Route::get('/dukungan', [DukunganSosialController::class, 'index'])->name('dukungan');
    Route::get('/pengingat', [PengingatObatController::class, 'index'])->name('pengingatObat');
    Route::post('/pengingat', [PengingatObatController::class, 'store'])->name('pengingat.store');
    Route::get('/pengingat-obat/update-status-sudah/{id}', [PengingatObatController::class, 'updateStatusSudah'])->name('update-status-sudah');
    Route::get('/pengingat-obat/update-status-terlewat/{id}', [PengingatObatController::class, 'updateStatusTerlewat'])->name('update-status-terlewat');
    Route::delete('/pengingat/{id}', [PengingatObatController::class, 'destroy'])->name('pengingat.destroy');
    Route::get('/dokter', [DokterController::class, 'index'])->name('dokter');
    Route::get('/pola-makan', [PolaMakanController::class, 'index'])->name('pola.makan');
    Route::get('/aktivitas', [KontrolAktivitasController::class, 'index'])->name('kontrol.aktivitas');
    Route::post('/aktivitas/simpan', [KontrolAktivitasController::class, 'store'])->name('kontrol.aktivitas.simpan');
    Route::delete('/aktivitas/hapus/{id}', [KontrolAktivitasController::class, 'destroy'])->name('kontrol.aktivitas.hapus');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';