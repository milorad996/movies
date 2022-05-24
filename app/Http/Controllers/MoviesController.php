<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\CreateCommentRequest;
use App\Http\Models\Comment;
use Illuminate\Support\Facades\DB;


class MoviesController extends Controller
{
    public function index()
    {

        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }
    public function show(Movie $movie)
    {

        return view('movies.show', compact('movie'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(CreateMovieRequest $request)
    {


        $data = $request->validated();
        $movie = Movie::create($data);
        return redirect('/movies/' . $movie->id);
    }
}
