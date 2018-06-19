@extends('layout')

@section('content')
  <h1>Tutti gli Studenti:</h1>

  @foreach ($students as $s)
    name: {{$s['name']}}<br>
    lastname: {{$s['lastname']}}<br>
  @endforeach
@endsection
