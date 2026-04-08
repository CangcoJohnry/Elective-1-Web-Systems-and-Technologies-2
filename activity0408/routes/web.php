<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::redirect('/', '/login');

Route::view('/login', 'login');
Route::post('/login', [AuthController::class, 'login']);

Route::view('/register', 'register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/profile/edit', [AuthController::class, 'edit']);
Route::post('/profile/update', [AuthController::class, 'update']);

Route::view('/dashboard', 'dashboard');
Route::view('/profile', 'profile');
Route::post('/logout', [AuthController::class, 'logout']);