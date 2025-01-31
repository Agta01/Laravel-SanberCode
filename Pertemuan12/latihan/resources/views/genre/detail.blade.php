@extends('master')
@section('title')
genre PAGES DETAIL genre
@endsection
@section('content')

<h1 class="text-primary">{{$genre->name}}</h1>
<p>ID : {{$genre->id}}</p>
<p>Created at : {{$genre->created_at}}</p>
<p>Updated at : {{$genre->updated_at}}</p>
@endsection