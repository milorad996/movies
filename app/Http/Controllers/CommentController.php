<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentRequest;
use App\Http\Controllers\MoviesController;
use App\Models\Movie;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Movie $movie, CreateCommentRequest $request)
    {
        $data = $request->validated();

        $comment = $movie->comments()->create($data);
        return back();
    }
}
