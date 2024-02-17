<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Controllers;

class HomeController extends Controller
{
    public function show()
    {
        if (!UserController::isLogged()) {
            return view('home');
        }
        $moviesByName = MoviesController::searchMovieWithParams("", "title", "asc");
        $data['filmes'] = $moviesByName;
        return view('filmes', $data);
    }
}
