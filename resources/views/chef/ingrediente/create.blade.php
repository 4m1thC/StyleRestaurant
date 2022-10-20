

@extends('chef/diseños/plantillaBase')
@section('contenido')

<figure class="text-center" >
    <figcaption class="blockquote-footer">
      <b style="color:#c21d1d"> <h3> CREAR INGREDIENTE</h3></b>
      Llene los datos correspondiente y cree el nuevo  <cite title="Source Title">Ingrediente</cite>
    </figcaption>
  </figure>
  <br>
<form action="{{url('/chef/ingrediente')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-12">
    <label for="" class="form-label">Nombre</label>
    <input type="text" name="nombre" value=""  class="form-control">
</div>
</div>
<div class="row">
    <div class="col-md-12">
    <label for="" class="form-label">Categoria</label>
    <input type="text" name="categoria" value=""  class="form-control">
</div>
</div>
<div class="row">
    <div class="col-md-5">
    <label for="" class="form-label">Stock</label>
    <input type="text" name="stock" value=""  class="form-control" style="height: 50px;">
</div>

<div class="col-md-7">
    <label for="" class="form-label">Unidad de Medida</label>
    <input type="text" name="unidadmedida" value=""  class="form-control" style="height: 50px;">
</div>
</div>
<br>
<div class="row" style="text-align:center" >
    
    <div class="col-md-6">
    <input type="submit" value="Crear ingrediente" class="btn btn-warning" style="width: 150px" onclick="return confirm('Se creara el nuevo ingrediente, ¿esta seguro?')">
    </div>
    <div class="col-md-6" >
        <a href="{{route('ingrediente.index')}}"  class="btn btn-danger"  role="button" style="width: 150px">Cancelar</a>
      
    </div>
</div>

</form>

 @stop