

@extends('administrador/diseños/plantillaBase')
@section('contenido')


<figure class="text-center" >
    <figcaption class="blockquote-footer">
      <b style="color:#c21d1d"> <h3> CREAR NUEVO USUARIO</h3></b>
      Llene los datos correspondiente y cree el nuevo  <cite title="Source Title">Usuario</cite>
    </figcaption>
  </figure>
  <br>
<form action="{{url('/administrador/usuario')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="row" >
    <figcaption class="blockquote-footer">
        Datos Personales del <cite title="Source Title">Usuario</cite>
      </figcaption>
</div>
<div class="row">
<div class="col-md-12">
    <label for="" class="form-label">Ci</label>
    <input type="text" name="ci" value=""  class="form-control">
</div>
</div>
<div class="row">
<div class="col-md-4">
    <label for="" class="form-label">Nombre</label>
    <input type="text" name="nombre" value=""  class="form-control">
</div>
<div class="col-md-4">
    <label for="" class="form-label">Apellido Paterno</label>
    <input type="text" name="ape_paterno" value=""  class="form-control">
</div>

<div class="col-md-4">
    <label for="" class="form-label">Apellido Materno</label>
    <input type="text" name="ape_materno" value=""  class="form-control">
</div>
</div>
<div class="row">
<div class="col-md-12">
    <label for="" class="form-label">Fecha de Creacion</label>
    <input type="text" name="fechaRegistro" value=""  class="form-control">
</div>
</div>
<div class="row" >
    <figcaption class="blockquote-footer">
        Datos correspondientes al inicio de sesion del  <cite title="Source Title">Usuario</cite>
      </figcaption>
</div>
<div class="row">
<div class="col-md-6">
    <label for="" class="form-label">E-mail</label>
    <input type="text" name="email" value=""  class="form-control">
</div>
<div class="col-md-6">
<label for="" class="form-label">Password</label>
<input type="text" name="password" value=""  class="form-control">
</div>
</div>
<div class="row">
<div class="col-md-12">
    <label for="" class="form-label">Tipo de usuario</label><br>
    <select name="tipo"  style="width: 100px">
        <option value="cajero"  >cajero</option>
        <option value="administrador" >administrador</option>
        <option value="cliente" >cliente</option>
        <option value="camarero" >camarero</option>
        <option value="chef"  >chef</option>
    </select>
</div>
</div>

<div class="row" style="text-align:center">
    
<div class="col-md-6" >
    <input type="submit" value="Crear usuario" class="btn btn-warning" style="width: 150px" onclick="return confirm('Se creara un nuevo usuario, ¿esta seguro?')">
</div>
<div class="col-md-6" >
    <a href="{{route('usuario.index')}}"  class="btn btn-danger"  role="button" style="width: 150px">Cancelar</a>
  
</div>
</div>

</form>

 @stop