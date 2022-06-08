<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    use HasFactory;

     //Extender modelo para relacionar los modelos con productos

    //Crear metodo
    public function marca(){
        //Retorna las marcas  de los productos
        return $this->belongsTo(Marca::class);
    }

    //Crear metodo de categoria
    public function categoria(){
        //Retornar categorias
        return $this ->BelongsTo(Categoria::class);
    }

}
