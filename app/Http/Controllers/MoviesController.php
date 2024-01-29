<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        try{
        $response = Movie::get();
        return $response;
        if(!$response){
            return redirect()->back()->with('error', 'Usuário não encontrado');
        }
        }
        catch(QueryException $e){
            return redirect()->back()->with('error', 'Algo deu errado');
        }
    }
    public function update($id){
        return $id;
    }

    public function show(){
        $movies = $this->index();
        return view('admin.filmes', ['movies' => $movies]);
    }
}
