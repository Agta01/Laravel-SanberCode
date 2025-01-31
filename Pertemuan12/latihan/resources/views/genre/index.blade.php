@extends('master')
@section('title')
Genre PAGES INDEX (TAMPIL)
@endsection
@section('content')

<a href="/genre/create" class="btn btn-sm btn-info my-3">Create</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Genre Name</th>
        <th scope="col">Genre</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($genre as $g)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
    <td>{{$g->name}}</td>
    <td>
        <form action="/genre/{{$g->id}}" method="POST">
            @csrf
            @method('DELETE')
            
            <a href="/genre/{{$g->id}}" class="btn btn-info btn-sm">Detail</a>
            <a href="/genre/{{$g->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
            <input type="submit" value="delete" class="btn btn-danger btn-sm">
        </form>
    </td>
    </tr>
    @empty
        <p>No users</p>
    @endforelse
    </tbody>
  </table>

@endsection