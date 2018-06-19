@extends('layout')

@section('content')
@if ($errors->any())
  <ul>
    @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
<form action="{{route('students.add')}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="nome" required>
    <input type="text" name="lastname" placeholder="cognome" required>
    <input type="number" name="age" placeholder="eta" required>
    <input type="submit" name="" value="Salva">
</form>

@endsection

@section('additional_js')

  <script type="text/javascript">
    $('form').submit(function(e){
      // Client-side checks
      if ( !($('input[name="lastname"]').val()[0] == "f") &&
           !($('input[name="lastname"]').val()[0] == "F")
         ){
        alert("Cognome sbagliato");
        return false;
      }
      else{
        //checks ok!
        return true;
      }
    });
  </script>
@endsection
