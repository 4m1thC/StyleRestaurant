

@extends('chef/diseños/plantillaBase')
@section('contenido')
<figure class="text-center" >
    <figcaption class="blockquote-footer">
      <b style="color:#c21d1d"> <h3> CREAR PRODUCTO</h3></b>
      Llene los datos correspondiente y cree el nuevo  <cite title="Source Title">Producto</cite>
    </figcaption>
  </figure>
  <br>
<form action="{{url($url)}}" method="post" enctype="multipart/form-data">
@csrf

<div class="row">
    <div class="col-md-6">
    <label for="" class="form-label">Nombre</label>
    <input type="text" name="nombre" value=""  class="form-control">
    </div>
    <div class="col-md-6">
    <label for="" class="form-label">Costo</label>
    <input type="text" name="costo" value=""  class="form-control">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    <label for="" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" value=""  class="form-control"  style="height: 80px;">
    </div>
</div>
<div class="row">
    <div class="col-md-12">
    <label for="" class="form-label">Documento Visual</label>
    <input type="file" name="img" value=""  class="form-control" >
    </div>
</div>

@yield('adicional')
<div class="row" style="text-align:center" >
    
    <div class="col-md-6">
    <input type="submit" value="Crear Producto" class="btn btn-warning" style="width: 150px" onclick="return confirm('Se creara el nuevo producto, ¿esta seguro?')">
    </div>
    <div class="col-md-6" >
        <a href="{{route('producto.index')}}"  class="btn btn-danger"  role="button" style="width: 150px">Cancelar</a>
      
    </div>
</div>



</form>

 @stop