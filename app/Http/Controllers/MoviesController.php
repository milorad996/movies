<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MoviesController extends Controller
{
    public function index()
    {

        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }
}