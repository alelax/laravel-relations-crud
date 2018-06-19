@extends('layout')

@section('content')
  @foreach ($students as $s)
    @foreach ($s['assignments'] as $a)
      {{$s['name']}} {{$a['name']}} {{$a['mark']}}<br>
    @endforeach

  @endforeach
@endsection

{{-- <select class="" name="">
  @foreach ($student as $S)
    <option value="{{$s['id']}}">{{$s['nme']}}</option>
  @endforeach
</select> --}}
