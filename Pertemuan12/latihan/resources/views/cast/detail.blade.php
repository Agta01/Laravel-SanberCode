@extends('master')
@section('title')
CAST PAGES DETAIL CAST
@endsection
@section('content')

<h1 class="text-primary">{{$cast->name}}</h1>
<p>Umur : {{$cast->age}}</p>
<p>Bio : {{$cast->bio}}</p>
@endsection