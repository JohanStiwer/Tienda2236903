<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (!session('cart')) {
            echo "NO HAY ITEMS";
        } else {
            //ACCEDIENDO A LA VARIABLE DE SESSION
            return  view('cart.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //PERSISTIR DATOS DE SESION
        $producto = [["prod_id" => $request->prod_id, "cantidad" => $request->cantidad, "nombre_prod" => Producto::find($request->prod_id)->nombre]];

        //1.El primer producto en el carrito
        //Meter datos en una sesion
        if (!session('cart')) {

            $aux[] = $producto;
            session(['cart' => $aux]);
        } else {
            //EXTRAER LOS DATOS DEL CARRITO DE LA VARIABLE DE SESION
            $aux = session('cart');
            //ELIMINAR LA VARIABLE DE SESION
            session()->forget('cart');
            //AGREGAR EL NUEVO PRODUCTO A LOS YA EXISTENTES
            $aux[] = $producto;

            session(['cart' => $aux]);
        }

        return redirect('productos')->with("mensaje", "producto añadido");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session()->forget('cart');
    }
}
