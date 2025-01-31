@extends('master')
@section('title')
film PAGES Create
@endsection
@section('content')
<form method="POST" action="/film">
    @csrf

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
      <label for="title">Judul Film</label>
      <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
      <label for="summary">Summary</label>
      <input type="text" class="form-control" id="summary" name="summary">
    </div>
    <div class="form-group">
      <label for="release_year">release_year</label>
      <input type="text" class="form-control" id="release_year" name="release_year">
    </div>
    <div class="form-group">
      <label for="poster">poster</label>
      <input type="text" class="form-control" id="poster" name="poster">
    </div>
    <div class="form-group">
      <label for="genre_id">genre_id</label>
      <input type="text" class="form-control" id="genre_id" name="genre_id">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection