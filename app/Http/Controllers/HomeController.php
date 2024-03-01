<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Controllers;

class HomeController extends Controller
{

   
    public function show()
    {
        try {
            if (!UserController::isLogged()) {
                return view('home');
            }
            $moviesByName = MoviesController::searchMovieWithParams("", "title", "asc");
            $moviesByTime = MoviesController::searchMovieWithParams("", "created_at", "desc");
            if (class_basename($moviesByName) == "RedirectResponse" || class_basename($moviesByTime) == "RedirectResponse") {
                $data['filmesByName'] = [];
                $data['filmesByTime'] = [];
            } else {
                $data['filmesByName'] = $moviesByName;
                $data['filmesByTime'] = $moviesByTime;
            }

            return view('movies', $data);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Algo deu errado');
        }
    }
}
