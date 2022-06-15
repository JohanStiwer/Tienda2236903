@extends ('layouts.principal')

@section('contenido')
<div class="row">
    <h1>Carrito de compras</h1>
</div>
    @if (!session('cart'))
    <div class="row">
        <p>El carito no tiene items</p>
    </div>
    @else
<div class="col s12">
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
        </thead>

        <tbody>

            @foreach(session('cart') as $index =>$prod)
            <tr>
               <td>{{  $prod[0]["nombre_prod"]   }}</td>
               <td>{{ $prod[0]['cantidad'] }}</td>
                <td>{{ $prod[0]['precio'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

        <div class="row">
        <form action="{{ route('cart.destroy', 1   ) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn waves-effect waves-light">Vaciar carrito</button>
        </form>
    </div>
    @endif
@endsection
