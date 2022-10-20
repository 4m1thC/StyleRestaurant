@php
    $url="/chef/almuerzo"
@endphp

@extends('chef/diseños/createProducto')
@section('adicional')
<div class="row">
    <div class="col-md-12">
    <label for="" class="form-label">Nro Comesales</label>
    <input type="text" name="nroComesales" value=""  class="form-control">
</div>
</div>
<div class="row">
    <div class="col-md-6">
    <label for="" class="form-label">Sopa</label>
    <input type="text" name="sopa" value=""  class="form-control">
</div>
<div class="col-md-6">
    <label for="" class="form-label">Segundo</label>
    <input type="text" name="segundo" value=""  class="form-control">
</div>
</div>
<br>
@stop