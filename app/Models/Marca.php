<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    //Extender modelo para relacionar los modelos con productos

    //Crear metodo
    public function productos(){
        //Retorna los productos de la marca
        return $this->hasMany(Producto::class);
    }
}
