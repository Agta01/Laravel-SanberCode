@extends('master')
@section('title')
film PAGES UPDATE film
@endsection
@section('content')

<form method="POST" action="/film/{{$film->id}}">
    @csrf
    @method('PUT')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="form-group">        
      <label for="title">Film Title</label>
      <input type="text" class="form-control" value="{{$film->title}}" id="title" name="title" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="summary">Summary</label>
      <input type="text" class="form-control" value="{{$film->summary}}" id="summary" name="summary">
    </div>
    <div class="form-group">
      <label for="release_year">release year</label>
      <input type="text" class="form-control" value="{{$film->release_year}}" id="release_year" name="release_year">
    </div>
    <div class="form-group">
      <label for="poster">poster</label>
      <input type="text" class="form-control" value="{{$film->poster}}" id="poster" name="poster">
    </div>
    <div class="form-group">
      <label for="genre_id">genre id</label>
      <input type="text" class="form-control" value="{{$film->genre_id}}" id="genre_id" name="genre_id">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection