@extends('master')
@section('title')
CAST PAGES DETAIL CAST
@endsection
@section('content')

<h1 class="text-primary">{{$film->title}}</h1>
<p>Summary : {{$film->summary}}</p>
<p>Release Year : {{$film->release_year}}</p>
<p>Poster : {{$film->poster}}</p>
<p>Genre : {{$film->genre_id}}</p>
@endsection