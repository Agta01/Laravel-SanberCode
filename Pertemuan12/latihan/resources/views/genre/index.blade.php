@extends('master')
@section('title')
CAST PAGES INDEX (TAMPIL)
@endsection
@section('content')

<a href="/cast/create" class="btn btn-sm btn-info my-3">Create</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Cast Name</th>
        <th scope="col">Age</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($cast as $cs)
    <tr>
    <th scope="row">{{$loop->iteration}}</th>
    <td>{{$cs->name}}</td>
    <td>{{$cs->age}}</td>
    <td>
        <form action="/cast/{{$cs->id}}" method="POST">
            @csrf
            @method('DELETE')
            
            <a href="/cast/{{$cs->id}}" class="btn btn-info btn-sm">Detail</a>
            <a href="/cast/{{$cs->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
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