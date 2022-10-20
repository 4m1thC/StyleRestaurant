

@extends('administrador/diseños/plantillaBase')
@section('contenido')

<figure class="text-center">
    <figcaption class="blockquote-footer" >
      <b style="color:#c21d1d"> <h3> ACTUALIZAR DATOS DE USUARIO</h3></b>
       Edite y guarde los datos del usuario   <cite title="Source Title">seleccionado</cite>
    </figcaption>
  </figure>
  <br>
<form action="{{url('/administrador/usuario/'.$usuario->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
<div class="row" >
    <figcaption class="blockquote-footer">
        - Datos Personales del <cite title="Source Title">Usuario</cite>
      </figcaption>
</div>
<div class="row">
    <div class="col-md-12">
    <label for="" class="form-label">Ci</label>
    <input type="text" name="ci" value="{{ $usuario->ci }}" class="form-control">
</div>
</div>
<div class="row">
    <div class="col-md-4">
    <label for="" class="form-label">Nombre</label>
    <input type="text" name="nombre" value="{{ $usuario->nombre }}"  class="form-control">
</div>

<div class="col-md-4">
    <label for="" class="form-label">Apellido Paterno</label>
    <input type="text" name="ape_paterno" value="{{ $usuario->ape_paterno }}"  class="form-control">
</div>

<div class="col-md-4">
    <label for="" class="form-label">Apellido Materno</label>
    <input type="text" name="ape_materno" value="{{ $usuario->ape_materno }}"  class="form-control">
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <label for="" class="form-label">Fecha de Creacion</label>
    <input type="text" name="fechaRegistro" value="{{ $usuario->fechaRegistro }}"  class="form-control">
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
<input type="text" name="email" value="{{ $usuario->email }}"  class="form-control">
</div>
<div class="col-md-6">
<label for="" class="form-label">Password</label>
<input type="text" name="password" value="{{ $usuario->password }}"  class="form-control">
</div>
</div>
<div class="row">
    <div class="col-md-6">
    <label for="" class="form-label">Tipo</label>
<input type="text" name="tipo" value="{{ $usuario->tipo }}"  class="form-control">
</div>
</div>
<br>
<div class="row" style="text-align:center">
    
    <div class="col-md-6" >
    <input type="submit" value="Guardar Cambios" class="btn btn-warning" style="width: 150px" onclick="return confirm('¿Esta seguro de guardar los cambios?, el registro de usuario se actualizara')">
    </div>
    <div class="col-md-6" >
        <a href="{{route('usuario.index')}}"  class="btn btn-danger"  role="button" style="width: 150px">Cancelar</a>
      
    </div>
</div>

</form>



 @stop