<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\producto;
use App\Http\Requests\StoreProductoRequest;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //Seleccionar los productos en un arreglo
       $productos = Producto::all();
       //Mostrar la vista del catalogo, llevandole los productos
       return view('productos.index')->with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Seleccionar marcas en bd: Model Marca
        $Marcas = Marca::all();

        //Seleccionar marcas en bd: Model Marca
        $categorias = Categoria::all();
        return view('productos.create')->with("marcas", $Marcas)->with("categorias", $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
        $p = new producto();
        $p->nombre = $request->nombre;
        $p->desc = $request->desc;
        $p->precio = $request->precio;
        $p->marca_id = $request->marca;
        $p->categoria_id = $request->categoria;
        //Objeto file
        $archivo = $request->imagen;

        $p->imagen =  $archivo->getClientOriginalName();
        //Ruta donde se almacena el archivo
        $ruta = public_path()."/img";

        //Movemos archivo a ruta
        $archivo->move($ruta, $archivo->getClientOriginalName());
        //Mover el archivo cargando(uploaded) a la carpeta public/img
        //$request->imagen->move(public_path()."/img/", $request->imagen->getClientOriginalName());

        $p->save();
        return redirect('productos/create')->with('mensaje', "Producto registrado correctamente")
         ->with('mensajito', "Producto registrado correctamente");


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "Aqui se va a mostrar el detalle del producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        echo "Aqui se muestra el formulario de editar producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        echo "Guarda el producto editado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        echo "Aqui se van a eliminar los productos";
    }
}
