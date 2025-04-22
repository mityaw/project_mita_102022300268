<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperController;

// Route::get('/', function () {
//     return view('welcome');
Route::get('/supers', [SuperController::class, 'index']);

// Route::get('/', [SuperController::class, 'index']);