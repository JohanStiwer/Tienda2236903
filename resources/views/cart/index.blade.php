@extends ('layouts.principal')

@section('contenido')
<div class="row">
    <h1>Carrito de compras</h1>
</div>

<div class="col s12">
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
            </tr>
        </thead>

        <body>

            @foreach(session('cart')as $index =>prod)
            <tr>
                <td>{{ $prod['prod_id'] }}</td>
            </tr>
            @endforeach
        </body>
    </table>
</div>

<div class="row">
        <form action="route('cart.destroy')" method="POST">
            @method('delete')
            @csrf
            <button type="submit">Vaciar carrito</button>
        </form>
    </div>

@endsection