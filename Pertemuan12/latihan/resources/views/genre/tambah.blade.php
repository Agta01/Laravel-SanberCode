@extends('master')
@section('title')
Genre PAGES Create
@endsection
@section('content')
<form method="POST" action="/genre">
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
      <label for="name">Genre Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection