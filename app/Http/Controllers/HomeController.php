<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        if(UserController::isLogged()){
            return view('filmes');
        }
        return view('home');
    }
}
