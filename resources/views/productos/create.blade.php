@extends('layouts.principal')

@section('contenido')
<div class="row"> 
  <h2 class="cyan-text text-accent-2">Nuevo Producto de la tienda de Jean</h2>
</div>
    
  
  
  <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s8">
          <input id="nombre" name="nombre" type="text" class="validate">
          <label for="nombre">Nompre de producto de la tienda de Jean</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <textarea id="desc" class="materialize-textarea" name="desc"></textarea>
          <label for="textarea1">Descripcion  </label>
          <label for="Descripcion"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="precio" type="number" class="validate" name="precio">
          <label for="precio">Precio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <div class="file-field input-field">
            <div class="btn">
              <span>Imagen de producto</span>
              <input type="file" name="imagen">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s8">
          <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
            <i class="material-icons right"></i>
          </button>
          </div>
        </div>
      </div>
    </form>
  </div>
        
@endsection