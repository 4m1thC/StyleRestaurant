@extends('chef/diseños/plantillaBase')
@section('contenido')
 
<figure class="text-center" >
  <figcaption class="blockquote-footer">
    <b style="color:#c21d1d"> <h3>LISTA DE INGREDIENTES</h3></b>
    Actualice los datos y de ser necesario desactive el <cite title="Source Title">Ingrediente</cite>
  </figcaption>
</figure>
<br>
    <div class="table-responsive">
    <table class="table table-bordered" >
        <thead>
          <tr >
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
    
            @foreach ($ingredientes as $ingrediente)
          <tr >
            <td >{{ $ingrediente->id}}</td>
            <td>{{ $ingrediente->nombre }}</td>
            <td>{{ $ingrediente->categoria }}</td>
            <td>{{ $ingrediente->stock }}</td>
            <td>{{ $ingrediente->unidadmedida }}</td>
            <td> 
                <a href="{{url('chef/ingrediente/'.$ingrediente->id.'/edit')}}"   class="btn btn-warning"  role="button" >Editar</a>
            </td>
            <td> 
            <form action="{{url('chef/ingrediente/'.$ingrediente->id)}}" method="post">
             @csrf
             <!--  covertimos el metod_field en delete ya que es lo que espera la funcion store del controlador -->
            {{method_field('DELETE')}}
            <!--onclick retorna un mensaje de confirmacion antes de realizar el submit -->
            <input type="submit" onclick="return confirm('esta accion es irreversible')" value="Desactivar"  class="btn btn-danger" >
            </form>
            </td>
            
          </tr>
          @endforeach

        </tbody>
    </table>
</div>
    


@stop
