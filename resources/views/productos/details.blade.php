@extends('layouts.principal')

@section('contenido')
<div class="row">
    <div class="col s8">
        <div class="row">
            <div class="col s8">
                <img src="{{ asset('img/' .$producto->imagen)}}" width="500px" height="250px">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s8">
            <ul>
                <li><strong>Marca:</strong>{{ $producto->marca->nombre}}</li>
                <li><strong>Categoria: </strong>{{ $producto->categoria->nombre}}</li>
                <li><strong>Precio: </strong>{{ $producto->precio}}</li>
                <li><strong>Descripcion: </strong>{{ $producto->desc}}</li>
            </ul>
        </div>
    </div>
</div>


<div class="col s4">
    <h2>Cantidad</h2>
    <form action="{{ route('cart.store')}}" method="POST">
        @csrf
        <input type="hidden" name="prod_id" value="{{$producto->id}}">
        <input type="hidden" name="precio" value="{{$producto->precio}}">

        <div class="row">
            <div class="col s4">
                <select name="cantidad" id="cantidad">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <label for="cantidad">Cantidad: </label>
            </div>
        </div>
        <div class="row">
            <div class="col s4">

                <button class="btn waves-effect waves-light" type="submit" name="action">Añadir
                    <i class="material-icons right"></i>
                </button>

                @if(session('mensaje'))
                <div class="row">
                    <div class="col s8">
                        <span class="teal-text text-accent-3">
                            {{ session('mensaje')  }}
                        </span>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </form>


</div>

@endsection
