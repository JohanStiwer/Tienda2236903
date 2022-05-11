<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">    <title></title>
</head>
<body>
  <body>
    
  </body>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">La Tienda del Jean</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="badges.html">Productos</a></li>
        <li><a href="collapsible.html">Pedidos</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <!-- Page Content goes here -->
    @yield('contenido')
  </div>
  <script src="{{asset('materialize/js/materialize.js')}}"></script>
 
</body>
</html>