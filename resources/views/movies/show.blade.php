@extends("layouts.app")

@section('title', $movie->title)

@section('content')
<h1>{{$movie->title}}</h1>
<h3>{{$movie->director}}</h3>
<h4>{{$movie->genre}}</h4><p>Snimljen : {{$movie->year_of_recording}}</p>
<hr>
<p>{{$movie->storyline}}</p>
@endsection