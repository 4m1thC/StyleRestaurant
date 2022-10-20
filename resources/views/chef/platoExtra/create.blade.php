@php
    $url="/chef/platoExtra"
@endphp

@extends('chef/diseños/createProducto')
@section('adicional')
<div class="row">
    <div class="col-md-6">
    <label for="" class="form-label">Nro Comesales</label>
    <input type="text" name="nroComesales" value=""  class="form-control">
</div>
<div class="col-md-6">
    <label for="" class="form-label">Guarnicion</label>
    <input type="text" name="guarnicion" value=""  class="form-control">
</div>
</div>
<br>
@stop