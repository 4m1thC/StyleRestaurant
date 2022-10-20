

@extends('chef/diseños/plantillaBase')
@section('contenido')


<figure class="text-center" >
    <figcaption class="blockquote-footer">
      <b style="color:#c21d1d"> <h3> EDITAR INGREDIENTE</h3></b>
      Actualice los datos correspondiente del <cite title="Source Title">Ingrediente</cite>
    </figcaption>
  </figure>
<form action="{{url('/chef/ingrediente/'.$ingrediente->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
<div class="row">
    <div class="col-md-12">
    <label for="" class="form-label">Nombre</label>
    <input type="text" name="nombre" value={{$ingrediente->nombre}}  class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    <label for="" class="form-label">Categoria</label>
    <input type="text" name="categoria" value={{$ingrediente->categoria}}   class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-md-5">
    <label for="" class="form-label">Stock</label>
    <input type="text" name="stock" value={{$ingrediente->stock}}   class="form-control">
    </div>


<div class="col-md-7">
    <label for="" class="form-label">Unidad de Medida</label>
    <input type="text" name="unidadmedida" value={{$ingrediente->unidadmedida}}   class="form-control">
</div>
</div>
<br>
<div class="row" style="text-align:center" >
    
    <div class="col-md-6">
    <input type="submit" value="Actualizar" class="btn btn-warning" style="width: 150px" onclick="return confirm('Se actualizara el ingrediente, ¿esta seguro?')">
    </div>
    <div class="col-md-6" >
        <a href="{{route('ingrediente.index')}}"  class="btn btn-danger"  role="button" style="width: 150px">Cancelar</a>
      
    </div>
</div>


</form>

 @stop