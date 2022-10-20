

@extends('administrador/diseños/plantillaBase')
@section('contenido')

    <br><h2 class="text-center">Editar  usuario</h2>
<form action="{{url('/administrador/usuario/'.$usuario->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
<div class="mb-3">
    <label for="" class="form-label">Ci</label>
    <input type="text" name="ci" value="{{ $usuario->ci }}" class="form-control">
</div>
<div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input type="text" name="nombre" value="{{ $usuario->nombre }}"  class="form-control">
</div>

<div class="mb-3">
    <label for="" class="form-label">Apellido Paterno</label>
    <input type="text" name="ape_paterno" value="{{ $usuario->ape_paterno }}"  class="form-control">
</div>

<div class="mb-3">
    <label for="" class="form-label">Apellido Materno</label>
    <input type="text" name="ape_materno" value="{{ $usuario->ape_materno }}"  class="form-control">
</div>

<div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input type="text" name="fechaRegistro" value="{{ $usuario->fechaRegistro }}"  class="form-control">
</div>

<div class="mb-3">
    <label for="" class="form-label">Tipo</label>
<input type="text" name="tipo" value="{{ $usuario->tipo }}"  class="form-control">
</div>

<div class="mb-3">
    <label for="" class="form-label">E-mail</label>
<input type="text" name="email" value="{{ $usuario->password }}"  class="form-control">
</div>
<div class="mb-3">
<label for="" class="form-label">Password</label>
<input type="text" name="password" value="{{ $usuario->email }}"  class="form-control">
</div>

<div class="mb-3">
    <input type="submit" value="guardar" class="btn btn-success"></div>

</form>



 @stop