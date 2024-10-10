<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\CatatanKesehatanController;

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
    Route::get('/kesehatan', [CatatanKesehatanController::class, 'kesehatan'])->name('kesehatan');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
