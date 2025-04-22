<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\AuthController;

Route::get('/supers', [SuperController::class, 'index']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);

Route::get('/register',  [AuthController::class, 'seeRegister'])->name("register");
Route::post('/register/auth', [AuthController::class, 'showRegister'])->name('register.auth');

Route::get('/logout', [authController::class, 'logout'])->name('logout');
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');