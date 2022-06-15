<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->

    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

       <title></title>
</head>
<body>
  <body>

  </body>
  <nav class="grey darken-1">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"> _La Tienda del Jean</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{ url('productos') }}">Productos</a></li>
        <li><a href="{{ url('cart')}}">Cart</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <!-- Page Content goes here -->
    @yield('contenido')
  </div>
  <script src="{{asset('materialize/js/materialize.js')}}"></script>
  <script >
      document.addEventListener('DOMContentLoaded', function() {
        //Codigo de inicializacion de los select
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, []);
    //Codigo de inicializacion de los tabs
    let tabs = document.querySelector(".tabs");
    var instance = M.init(tabs);
    var instances = M.FormSelect.init(elems,[]);
  });

  </script>

</body>
</html>
