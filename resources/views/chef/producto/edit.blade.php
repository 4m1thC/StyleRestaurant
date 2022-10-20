

@extends('chef/diseños/plantillaBase')
@section('contenido')

<figure class="text-center" >
    <figcaption class="blockquote-footer">
      <b style="color:#c21d1d"> <h3> EDITAR PRODUCTO</h3></b>
      Actualice los datos correspondiente del  <cite title="Source Title">Producto</cite>
    </figcaption>
  </figure>
  <br>
<form action="{{url("chef/producto/".$producto->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
<div class="row">
    <div class="col-md-6">
    <label for="" class="form-label">Nombre</label>
    <input type="text" name="nombre" value="{{$producto->nombre}}"  class="form-control">
</div>
<div class="col-md-6">
    <label for="" class="form-label">Costo</label>
    <input type="text" name="costo" value="{{$producto->costo}}"  class="form-control">
</div>
</div>
<div class="row">
    <div class="col-md-12">
    <label for="" class="form-label">Descripcion</label>
    <input class="form-control" type="text" name="descripcion" value="{{$producto->descripcion}}"  style="height: 100px;">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    <label for="" class="form-label" >Documento Visual</label>
    </div>
</div>
<div class="row" >
    <div class="col-md-4">
    <img src="{{asset('storage').'/'.$producto->img}}" alt="" width="300" height="200" >
    </div>
    <div class="col-md-8">
        <br> <br>
    <span>¿Quiere sustuir la imagen actual?,<br> si es asi selecione la ruta del nuevo archivo <br> unicamente</span> 
    
    </div>
</div>
<div class="row">
    <div class="col-md-3">
    <input type="file" name="img" value="" style="text-align:center">
    
    </div>
    <div class="col-md-9">
        <span style="color:#263a9b">  <--- ¡veridique el nombre del nuevo archivo!</span>
        
    </div>
</div>

<br>
<div class="row" style="text-align:center" >
    <div class="col-md-6">
        <input type="submit" value="Guardar cambios" class="btn btn-primary" style="width: 150px" onclick="return confirm('Se actualizaran los datos del producto, ¿esta seguro?')">
        </div>
        <div class="col-md-6" >
            <a href="{{route('producto.index')}}"  class="btn btn-danger"  role="button" style="width: 150px">Cancelar</a>
          
        </div>
</div>
</form>

 @stop