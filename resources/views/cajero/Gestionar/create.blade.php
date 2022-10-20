@extends('cajero/Gestionar/plantilaBaseCajero')
@section('contenido')

<h2 class="text-center">GESTION DE MESAS</h2>
<form action="{{url('/cajero/Gestionar')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3">
    <label for="" class="form-label">ID_MESA</label>
    <input type="text" name="nombre" value=""  class="form-control">
</div>

<div class="mb-3">
    <label for="" class="form-label">CAPACIDAD</label>
    <input type="text" name="costo" value=""  class="form-control">
</div>

<div class="mb-3">
    <label for="" class="form-label">PISO</label>
    <input type="text" name="descripcion" value=""  class="form-control">
</div>

<div class="mb-3">
    <label for="" class="form-label">ESTADO</label>
    <input type="text" name="img" value=""  class="form-control">
</div>

@yield('adicional')
<div class="mb-3">
    <input type="submit" value="guardar" class="btn btn-success">
</div>

</form>

 @stop