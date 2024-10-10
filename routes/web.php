<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome.greet');
});
Route::get('/diabe-sweet', function () {
    return view('welcome.diabe');
})->name('diabe');

//admin Routes
Route::middleware(['auth', 'verified', 'rolemanager:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', 'index')->name('admin');
        });
    });
});

//user Routes
Route::middleware(['auth', 'verified', 'rolemanager:user'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::prefix('user')->group(function () {
            Route::get('/', 'index')->name('dashboard');
        });
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
