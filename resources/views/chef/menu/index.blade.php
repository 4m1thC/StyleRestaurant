@extends('chef/diseños/plantillaBase')
@section('contenido')
 
  <figure class="text-center" >
    <figcaption class="blockquote-footer">
      <b style="color:#c21d1d"> <h3> MENU DEL DIA </h3></b>
      Actualice el stock de los  <cite title="Source Title">Productos</cite>
    </figcaption>
  </figure>

  <br>
  <div class="row" style="color:#aaeabc">

  </div>
  <div class="row">
  <div class="col-md-5">
    <h5 class="text-right">Filtrar por dia:</h6></div>
  <div class="col-md-2">
  <form action="{{url('chef/menu/dia')}}" method="post" enctype="multipart/form-data">
    @csrf
    <h5 class="text-center">
    <select name="dia"  style="width: 100px">
        <option value="lunes" {{ (isset($menu->dia)) && ($menu->dia) == 'lunes' ? 'selected' : '' }}  >Lunes</option>
        <option value="martes" {{ (isset($menu->dia)) && ($menu->dia) == 'martes' ? 'selected' : '' }} >Martes</option>
        <option value="miércoles" {{ (isset($menu->dia)) && ($menu->dia) == 'miércoles' ? 'selected' : '' }} >Miercoles</option>
        <option value="jueves" {{ (isset($menu->dia)) && ($menu->dia) == 'jueves' ? 'selected' : '' }} >Jueves</option>
        <option value="viernes" {{ (isset($menu->dia)) && ($menu->dia) == 'viernes' ? 'selected' : '' }} >Viernes</option>
        <option value="sábado" {{ (isset($menu->dia)) && ($menu->dia) == 'sábado' ? 'selected' : '' }} >Sabado</option>
        <option value="domingo" {{ (isset($menu->dia)) && ($menu->dia) == 'domingo' ? 'selected' : '' }} >Domingo</option>
    </select>
  </h5>
  </div> 
  <div class="col-md-5">
    <b class="text-left">
    <input type="submit" value="Buscar"  class="btn btn-danger" >
    </b>
  </div>
  </form>
</div>
@foreach ($productos as $grupo)
<h4 style="background-color: #f4f4ea "  > {{'Categoria '.$grupo->first()->categoria}} </h4>

<div >
  <table class="table table-bordered">
    <thead>
      <tr>
        <td >Producto</td>
        <td >Documento Visual</td>
        <td >Stock</td>
         
      </tr>
    </thead>
    <tbody>
        @foreach ($grupo as $producto)
        @php
        $elem=$stock->where("idProd",$producto->id)->pluck("cantidad");
        @endphp
        <tr @php
            if($elem[0]==0){  echo 'style="background-color: #f2e3e0"'; }
        @endphp >
            <td >
              <label for="">{{'DENOMINATIVO: '.$producto->nombre }}</label><br>
              <label for="">{{ 'PRECIO: '.$producto->costo }}</label><br>
              <label for="">{{ 'DESCRIPCION: '.$producto->descripcion }}</label><br>
            </td>
            <td >
              <img src="{{asset('storage').'/'.$producto->img}}" alt="" width="280" height="180">
            </td>
            <td >
               
        <form action="{{url('chef/menu/'.$menu->id.'/'.$producto->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
                <input type="text" name="nuevo_stock"  style="width: 50px" value=@php echo $elem[0]; @endphp >
                <input type="submit" value="Actualizar" class="btn btn-warning" onclick="return confirm('¿Esta seguro de actualizar el Stock?')">
        </form>
            </td>
        </tr>
     @endforeach
    </tbody>
  </table>
  </div>
        

 @endforeach

@stop