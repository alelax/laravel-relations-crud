<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
      <div class="item"><a href="{{route('students.show')}}">Show</a></div>
      <div class="item"><a href="{{route('students.add')}}">New</a></div>
    </nav>
    @yield('content')

    <footer>Made by Boolean</footer>
    @yield('additional_js')
  </body>
</html>
