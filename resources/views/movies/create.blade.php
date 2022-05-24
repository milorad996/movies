@extends('layouts.app')

@section('title','Create movie')
    
@section('content')


<form method="post" action="/movies/create">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Director</label>
      <input type="text" class="form-control" name="director" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Genre</label>
        <input type="text" class="form-control" name="genre" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Year of recording</label>
        <input type="year" class="form-control" name="year_of_recording" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Storyline</label>
        <textarea class="form-control" name="storyline" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary form-control" class="form-group">Add</button>

      </div>
  </form>
@endsection