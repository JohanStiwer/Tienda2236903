<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('paises', function(){
    $paises = [
        "Colombia" => [
            "cap" => "Bogotá",
            "mon" => "Peso",
            "pob" => 51.6,
            "ciudades" => [
               "Medellin",
                "Cali",
                "Barranquilla",
                "Ibague",
                "Barrancabermeja"
            ]
            ],
            "Peru" => [
                "cap" => "Lima",
                "mon" => "Soles",
                "pob" => 32.9,
                "ciudades" => [
                    "Ayucucho",
                     "Cusco",
                     "Arequipa"
                    

                 ]
            ],
            "Paraguay" => [
                "cap" => "Asuncion",
                "mon" => "Guiaraní",
                "pob" => 7.133,
                "ciudades" => [
                    "Ciudad del Este",
                     "Encarnación",
                 ]
            ]
            ,"Ecuador" => [
                "cap" => "Quito",
                "mon" => "Dolar",
                "pob" => 17.4,
                "ciudades" => [
                    "Guayaquil"
                 ]
            ]
    ];
    return view('paises') ->with ('paises',$paises);
});

Route::get('prueba', function(){
    return view('productos.create   ');    
});


/**
 * Rutas REST Producto 
 * 
 */
Route::resource('productos', ProductoController::class );



/**
 * Rutas REST Carrito de compras 
 * 
 */
Route::resource('cart', CartController::class, ['only' =>[ 'index' ,'store', 'destroy' ]]);
