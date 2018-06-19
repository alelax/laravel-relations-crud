@extends('layout')

@section('content')
@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
<form action="{{route('students.edit',['id'=>$s['id']])}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="nome" value="{{$s['name']}}" required>
    <input type="text" name="lastname" placeholder="cognome" value="{{$s['lastname']}}" required>
    <input type="number" name="age" placeholder="eta" value="{{$s['age']}}" required>
    <input type="submit" name="" value="Salva">
</form>

@endsection
