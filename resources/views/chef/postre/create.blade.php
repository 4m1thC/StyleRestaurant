@php
    $url="/chef/postre"
@endphp

@extends('chef/diseños/createProducto')
@section('adicional')
<div class="row">
    <div class="col-md-6">
    <label for="" class="form-label">Tipo</label>
    <input type="text" name="tipo" value=""  class="form-control">
</div>
<div class="col-md-6">
    <label for="" class="form-label">Nro. Comesales</label>
    <input type="text" name="nroComesales" value=""  class="form-control">
</div>
</div>
<br>
@stop