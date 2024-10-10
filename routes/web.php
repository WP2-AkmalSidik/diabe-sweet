<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome.greet');
});
Route::get('/diabe-sweet', function () {
    return view('welcome.diabe');
})->name('diabe');

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified', 'rolemanager:user'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'verified', 'rolemanager:admin'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
