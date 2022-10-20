@php
    $url="/chef/bebida"
@endphp

@extends('chef/diseños/createProducto')
@section('adicional')
<div class="row">
    <div class="col-md-12">
    <label for="" class="form-label">Beneficio</label>
    <input type="text" name="beneficio" value=""  class="form-control" style="height: 100px;">
</div>
</div>
<div class="row">
    <div class="col-md-6">
    <label for="" class="form-label">Tipo</label>
    <input type="text" name="tipo" value=""  class="form-control">
</div>
<div class="col-md-6">
    <label for="" class="form-label">Nro. Comesales</label>
    <input type="text" name="nroPersonas" value=""  class="form-control">
</div>
</div>
<br>
@stop