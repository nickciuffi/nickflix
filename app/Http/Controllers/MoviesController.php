<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use function Laravel\Prompts\confirm;

class MoviesController extends Controller
{
    public function index()
    {
        try {
            $response = Movie::orderBy('title', 'asc')->get();

            return $response;
        } catch (QueryException $e) {
            return redirect()->route('home')->with('error', 'Algo deu errado');
        }
    }

    public function get(int $id)
    {
        $movie = Movie::where('id', $id)->first();
        if (!$movie) {
            return redirect()->route('home')->with('error', 'Filme não encontrado');
        }
        $data['movie'] = $movie;
        return view('movie', $data);
    }

    public function findByName(Request $request)
    {
        try {
            $searchText = $request->searchText;
            $movies = $this->searchMovieWithParams($searchText);
            $data['movies'] = $movies;
            return view('searchedMovies', $data);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Algo deu errado');
        }
    }

    public function edit(int $id, Request $request)
    {
        try {
            $customMessages = [
                'title.required' => 'O campo de titulo é obrigatório',
                'duration.required' => 'O campo de duração é obrigatório',
                'duration.hours_and_minutes' => 'A duração deve ser no formato (horas:minutos)',
                'description.required' => 'O campo de descrição é obrigatório'
            ];
            $request->validate([
                'title' => 'required',
                'duration' => 'required|hours_and_minutes',
                'description' => 'required',
            ], $customMessages);

            $movie = Movie::where('id', $id)->first();
            $movie->title = $request->title;
            $movie->description = $request->description;
            $movie->duration = $request->duration;
            $movie->banner_link = $request->banner_link;
            $movie->video_link = $request->video_link;
            $movie->save();
            return redirect()->back()->with('success', 'Filme editado');

        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Algo deu errado');
        }
    }
    public function remove(int $id)
    {
        try {
            Movie::destroy($id);
            return redirect()->back()->with('success', 'Filme deletado');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Algo deu errado');
        }
    }
    public function updateOrDelete($id, Request $request)
    {
        switch ($request->action) {
            case 'edit':
                return $this->edit($id, $request);
            case 'remove':
                return $this->remove($id);
        }
    }

    public static function searchMovieWithParams($title, $orderBy = "title", $sequence = "asc")
    {
        try {

            $movies = Movie::where('title', 'like', "%" . $title . "%")->orderBy($orderBy, $sequence)->take(12)->get();

            return $movies;
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Algo deu errado');
        }
    }

    public function filterMovie(Request $request)
    {
        $title = $request->title;
        $orderBy = $request->orderBy;
        $sequence = $request->sequence;
        try {
            $movies = $this->searchMovieWithParams($title, $orderBy, $sequence);

            if (!isset($movies[0])) {
                return redirect()->route('admin.filmes')->with('error', 'Filme não encontrado');
            }
            $data['movies'] = $movies ?? null;
            $data['title'] = $title ?? null;
            $data['orderBy'] = $orderBy ?? null;
            $data['sequence'] = $sequence ?? null;

            return view('admin.filmes', $data);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'Algo deu errado');
        }
    }


    public function add(Request $request)
    {
        try {
            $customMessages = [
                'title.required' => 'O campo de titulo é obrigatório',
                'description.required' => 'O campo de descrição é obrigatório',
                'duration.required' => 'O campo de duração é obrigatório',
                'description.max' => 'O campo de descrição tem um limite de 800 caracteres'
            ];
            $request->validate([
                'title' => 'required',
                'description' => 'required|max:800',
                'duration' => 'required|hours_and_minutes',
            ], $customMessages);

            $movie = new Movie;
            $movie->title = $request->title;
            $movie->description = $request->description;
            $movie->duration = $request->duration;
            $movie->banner_link = $request->banner_link;
            $movie->video_link = $request->video_link;
            $movie->save();
            return redirect()->back()->with('success', 'Filme adicionado');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show()
    {
        try {
            $movies = $this->index();
            if (class_basename($movies) == "RedirectResponse") {
                return view('admin.filmes', ['movies' => []]);
            }
            return view('admin.filmes', ['movies' => $movies]);
        } catch (QueryException $e) {
            return redirect()->route('home')->with('error', 'Algo deu errado');
        }

    }
}
