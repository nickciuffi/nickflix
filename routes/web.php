<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/lista', function () {
    return view('list');
})->name('list');

Route::get('/login', function () {
    return view('login');
})->name('login');
