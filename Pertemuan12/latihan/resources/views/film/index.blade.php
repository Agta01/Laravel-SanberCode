@extends('master')
@section('title')
film PAGES INDEX (TAMPIL)
@endsection
@section('content')

<a href="/film/create" class="btn btn-sm btn-info my-3">Create</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Title Film</th>
        <th scope="col">Release Year Film</th>
        <th scope="col">Aksi</th>

      </tr>
    </thead>
    <tbody>
    @forelse ($film as $f)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
    <td>{{$f->title}}</td>
    <td>{{$f->release_year}}</td>
    <td>
        <form action="/film/{{$f->id}}" method="POST">
            @csrf
            @method('DELETE')
            
            <a href="/film/{{$f->id}}" class="btn btn-info btn-sm">Detail</a>
            <a href="/film/{{$f->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
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