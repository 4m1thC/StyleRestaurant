@extends('chef/diseños/plantillaBase')
@section('contenido')

<figure class="text-center">
  <figcaption class="blockquote-footer" >
    <b style="color:#c21d1d"> <h3> ADICIONAR INGREDIENTES</h3></b>
    Adicione o de ser necesario quite el correspondiente<cite title="Source Title">Ingrediente</cite>
  </figcaption>
</figure>

<br>
<div class="row">
<div class=" col-sm-8  col-lg-8 col-md-8" >
    
    <h5 > Ingredientes a Agregar</h5><br>

    
    <div class="table-responsive">
    <table class="table table-hover" >
        <thead>
          <tr style="background-color: #f4f4ea " >
            <th scope="col">Id</th>
            <th scope="col">nombre</th>
            <th scope="col">categoria</th>
            <th scope="col">stock</th>
            <th scope="col">unidadmedida</th>
            <th></th>
            <th></th>
            
          </tr>
        </thead>
        <tbody>
    
            @foreach ($ingredientesNoAgregados as $ingrediente)
          <tr >
            <th scope="row" >{{ $ingrediente->id}}</th>
            <td>{{ $ingrediente->nombre }}</td>
            <td>{{ $ingrediente->categoria }}</td>
            <td>{{ $ingrediente->stock }}</td>
            <td>{{ $ingrediente->unidadmedida }}</td>
            <td>
            <form action="{{url('chef/perteneceProd/'.$ingrediente->id.'/'.$producto->id) }}" method="post">
             @csrf
             <!--  covertimos el metod_field en delete ya que es lo que espera la funcion store del controlador -->
            
            <!--onclick retorna un mensaje de confirmacion antes de realizar el submit -->
            <input type="submit" onclick="return confirm('va añadir este ingrediente a su producto')" value="Agregar"  class="btn btn-warning" >
            </form>
            </td>
            
          </tr>
          @endforeach

        </tbody>
    </table>
</div>

<br>
<h5 >Ingredientes Agregados</h5>  <br>
<div class="table-responsive">
  <table class="table table-hover">
      <thead>
        <tr style="background-color: #f4f4ea ">
          <th scope="col">Id</th>
          <th scope="col">nombre</th>
          <th scope="col">categoria</th>
          <th scope="col">stock</th>
          <th scope="col">unidadmedida</th>
          <th></th>
          <th></th>
          
        </tr>
      </thead>
      <tbody>
  
          @foreach ($ingredientesAgregados as $ingredienteAgregado)
        <tr >
          <th scope="row" >{{ $ingredienteAgregado->id}}</th>
          <td>{{ $ingredienteAgregado->nombre }}</td>
          <td>{{ $ingredienteAgregado->categoria }}</td>
          <td>{{ $ingredienteAgregado->stock }}</td>
          <td>{{ $ingredienteAgregado->unidadmedida }}</td>
          <td>
           
          <form action="{{url('chef/perteneceProd/'.$ingredienteAgregado->id.'/'.$producto->id) }}" method="get">
           @csrf
           <!--  covertimos el metod_field en delete ya que es lo que espera la funcion store del controlador -->
          
          <!--onclick retorna un mensaje de confirmacion antes de realizar el submit -->
          <input type="submit" onclick="return confirm('va quitar este ingrediente a su producto')" value="Quitar"  class="btn btn-danger" >
          </form>
          </td>
          
        </tr>
        @endforeach

      </tbody>
  </table>
  
</div>
</div>
<br>

<div class=" col-sm-4  col-lg-4 col-md-4 ">
  <h5>¡Va agregar ingredientes a su produto !<br> <b style="color:#c21d1d" >{{$producto->nombre }}</b> </h5>
    <img src="{{asset('storage').'/'.$producto->img}}" alt="" width="250" height="200">
  
  
  </div>
  <br>
</div> 
<div class="row">
<div class="col-md-11">
<div class="text-right"><a class="btn btn-primary" href="{{url('chef/producto')}}" role="button">Dejar de adicionar</a></div>
</div>
</div>

@stop
