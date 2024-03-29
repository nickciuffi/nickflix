<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::get('/search', [MoviesController::class, 'findByName'])->name('search');

Route::get('/movie/{id}', [MoviesController::class, 'get'])->name('movie');

Route::post('/register-user', [UserController::class, 'registerUser'])->name('register-user');

Route::post('/login-user', [UserController::class, 'loginUser'])->name('login-user');

Route::get('/logout-user', [UserController::class, 'logoutUser'])->name('logout-user');

Route::middleware(['login'])->group(function () {

    Route::get('/lista', function () {
        return view('list');
    })->name('list');

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
    Route::get('/admin/filmes', [MoviesController::class, 'show'])->name('admin.filmes');

    Route::post('/admin/movie/update-delete/{id}', [MoviesController::class, 'updateOrDelete'])->name('admin.update-or-delete-movie');

    Route::get('/admin/movie/filter/', [MoviesController::class, 'filterMovie'])->name('admin.filter-movie');

    Route::post('/admin/movie/add', [MoviesController::class, 'add'])->name('admin.add-movie');

    Route::get('/admin/movie/add', function () {
        return view('admin.add-movies');
    })->name('admin.add-movie-page');

    Route::get('/admin/admins', function () {
        return view('admin/admins');
    })->name('admin.admins');
});
