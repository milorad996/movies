@extends("layouts.app")

@section('title', 'Movies')

@section('content')
    <h1>Movies</h1>

    <ul>
        @foreach($movies as $movie)
        <li>
            <a href="/movies/{{$movie->id}}">{{$movie->title}}</a>
            <hr>
            <p>{{$movie->storyline}}</p>
        </li>
        @endforeach
    </ul>
@endsection