@extends('chef/diseños/plantillaBase')
@section('contenido')
<figure class="text-center" >
  <figcaption class="blockquote-footer">
    <b style="color:#c21d1d"> <h3>LISTA DE PRODUCTOS</h3></b>
    Actualice los datos, agregue ingredientes y de ser necesario desactive el <cite title="Source Title">Producto</cite>
  </figcaption>
</figure>

@if(session()->has('success'))
        <div style="background-color: rgb(240, 243, 193); padding: 1em" role="alert" >{{ session()->get('success') }} </div>
@endif
@foreach ($productos as $producto)
<div >
  <table class="table table-bordered" >
    <thead >
      <tr >
        <th class="text-center" >
          <label for="">{{ "ID: ".$producto->id}}</label><br>
          <label for="">{{ "NOMBRE: ".$producto->nombre }}</label><br>
          <label for="">{{ "CATEGORIA: ".$producto->categoria }}</label><br>
          <label for="">{{ "PRECIO: ".$producto->costo }}</label><br>
          <label for="">{{ "DESCRIPCION: ".$producto->descripcion }}</label><br>
        </th>
        <th colspan="3" class="text-center" >
          <img src="{{asset('storage').'/'.$producto->img}}" alt="" width="300" height="200">
        </th>
        
      </tr>
    </thead>
    <tbody>
      <tr >
        <td style="padding-top: 2em">
          @php
          $idProd=$producto->id;   
         @endphp
         <a href="{{url('chef/producto/'.$producto->id.'/edit')}}"  class="btn btn-danger "  role="button"   style="width: 150px">Editar 
        </th>
        <td style="padding-top: 2em"> <a href="{{url('chef/perteneceProd/create/'.$idProd)}}"   class="btn btn-warning " role="button"  style="width: 150px">Agregar Ingrediente</td>
        <td style="padding-top: 2em">
          <form action="{{url('chef/producto/'.$producto->id)}}" method="post">
          @csrf
          <!--  covertimos el metod_field en delete ya que es lo que espera la funcion store del controlador -->
         {{method_field('DELETE')}}
         <!--onclick retorna un mensaje de confirmacion antes de realizar el submit -->
         <input type="submit" onclick="return confirm('esta accion es irreversible')" value="Desactivar"  class="btn btn-danger "  style="width: 150px">
         </form>
        </td>

        <td >
        <label for="" class="form-label">Añadir al menu dia: </label>
        <form action="{{url('chef/adicionaMenu/'.$producto->id)}}" method="get">
          @csrf
          <select name="dia"  style="width: 100px">
            <option value="lunes" >Lunes</option>
            <option value="martes">Martes</option>
            <option value="miércoles"  >Miercoles</option>
            <option value="jueves"  >Jueves</option>
            <option value="viernes"  >Viernes</option>
            <option value="sábado" >Sabado</option>
            <option value="domingo"  >Domingo</option>
        </select><br>
         <input type="text" name='cantidad' placeholder="introduzca cantidad">
         <input type="submit" onclick="return confirm('esta accion es irreversible')" value=" Añadir"  class="btn btn-warning "  style="width: 100px">
         </form>
         </td> 
      
     </tr>
    </tbody>
  </table>
  </div>
        
 @endforeach

 
@stop