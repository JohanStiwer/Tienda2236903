<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //1. Estalecer reglas de validacion 
        return [
            "nombre" => 'required|alpha',
            "desc" => 'required|max:100',
            "precio" => 'required|numeric|max:10000',
            "marca" => 'required',
            "categoria" => 'required'   
        ];
    }


    /*
    *Mensajes perzonalizados
    */

    public function messages(){
        
            return [
                'required' =>"El dato es obligatorio",
                "alpha" => "Solo se admiten letras",
                "max" => "el maximo son :max caracteres",
                "numeric" => "Solo se admiten numeros"
            ];  
    
        
    }
}
