

@extends('administrador/diseños/plantillaBase')
@section('contenido')


<h2 class="text-center">Crear nuevo usuario</h2>
<form action="{{url('/administrador/usuario')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Ci</label>
    <input type="text" name="ci" value=""  class="form-control">
</div>
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text" name="nombre" value=""  class="form-control">
</div>

<div class="mb-3">
    <label for="" class="form-label">Apellido Paterno</label>
    <input type="text" name="ape_paterno" value=""  class="form-control">
</div>

<div class="mb-3">
    <label for="" class="form-label">Apellido Materno</label>
    <input type="text" name="ape_materno" value=""  class="form-control">
</div>

<div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input type="text" name="fechaRegistro" value=""  class="form-control">
</div>



<div class="mb-3">
    <label for="" class="form-label">E-mail</label>
<input type="text" name="email" value=""  class="form-control">
</div>
<div class="mb-3">
<label for="" class="form-label">Password</label>
<input type="text" name="password" value=""  class="form-control">
</div>
<div class="mb-3">
    <label for="" class="form-label">Tipo</label>
   <select name="tipo" id="">
    <option value="cliente" >Cliente</option>
    <option value="cajero">Cajero</option>
    <option value="camarero">Camarero</option>
    <option value="chef">Chef</option>
    <option value="administrador">Administrador</option>
</select> 
</div>



<div class="mb-3">
    <input type="submit" value="guardar" class="btn btn-success">
</div>



</form>

 @stop