@extends("layouts.app")

@section('title', $movie->title)

@section('content')
<h1>{{$movie->title}}</h1>
<h3>{{$movie->director}}</h3>
<h4>{{$movie->genre}}</h4><p>Snimljen : {{$movie->year_of_recording}}</p>
<hr>
<p>{{$movie->storyline}}</p>

<div>
    <h5>Comments:</h5>
    @foreach($movie->comments as $comment)
    <div>{{$comment->content}}</div>
    @endforeach

    <form method="POST" action="/movies/{{$movie->id}}/comments">
        @csrf

        <div class="form-group">
            <label for="content">Leave your comment</label>
            <textarea name="content" class="form-control" id="content" rows="2"></textarea>
           
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection