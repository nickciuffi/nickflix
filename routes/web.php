<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/register-user', [UserController::class, 'registerUser'])->name('register-user');

Route::post('/login-user', [UserController::class, 'loginUser'])->name('login-user');

Route::get('/logout-user', [UserController::class, 'logoutUser'])->name('logout-user');

Route::middleware(['login'])->group(function () {
    Route::get('/lista', function () {
        return view('list');
    })->name('list');
    Route::get('/filmes', function () {
        return view('filmes');
    })->name('filmes');
});

Route::middleware(['no-login'])->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');

    Route::get('/cadastro', function () {
        return view('register');
    })->name('register');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/filmes', [MoviesController::class, 'show'])->name('admin-filmes');

    Route::post('/admin/update/{id}', [MoviesController::class, 'update'])->name('update-film');

    Route::get('/admin/admins', function () {
        return view('admin/admins');
    })->name('admin-admins');
});
