@extends('layouts.principal')

@section('contenido')
    <div class="row">
        <h2>Catalogo productos</h2>
    </div>
  <div class="row">
    @foreach ($productos as $producto )
    <div class="col s12 m4">
        <div class="card">
            <div class="image">
                <img width="382px" height="280px" src="{{asset('img/'.$producto->imagen)}}" class="card-image">
            </div>
            <div class="card-content">
                <ul>
                    <li>{{ $producto->nombre}}</li>
                    <li>Precio: {{$producto->precio}}</li>
                    <li>Descripcion: {{$producto->desc}} </li>
                </ul>
            </div>
            <div class="card-action">
                <a href="{{ route ('productos.show' , $producto->id) }}">VER DETALLES </a>
            </div>
        </div>
    </div>

    @endforeach

</div>

@endsection
