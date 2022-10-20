@php
$rutaNuevo="../cajero/GenerarInformes/plantillaEgresos";
$rutaEditar="";
@endphp
@extends('cajero.plantilaBaseCajero')
@section('contenido')

    <br><h2 class="text-center">PROVEEDORES</h2>
<form action="" method="post" enctype="multipart/form-data">
<div class="mb-3">
    <label for="" class="form-label">NOMBRE/RAZONSOCIAL</label>
    <input type="text" name="nombre" value="" class="form-control">
</div>
<div class="mb-3">
    <label for="" class="form-label">NIT/CI</label>
    <input type="text" name="nit" value=" "  class="form-control">
</div>


<div class="mb-3">
    <input type="submit" value="guardar" class="btn btn-success"></div>

</form>

@endsection