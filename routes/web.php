<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/lista', function () {
    return view('list');
})->name('list');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('register');
})->name('register');

Route::post('/register-user', [UserController::class, 'registerUser'])->name('register-user');

Route::post('/login-user', [UserController::class, 'loginUser'])->name('login-user');

Route::get('/logout-user', [UserController::class, 'logoutUser'])->name('logout-user');
