@extends('administrador/diseños/plantillaBase')
@section('contenido')
 
  
    <figure class="text-center">
      <figcaption class="blockquote-footer" >
        <b style="color:#c21d1d"> <h3> LISTA DE USUARIOS</h3></b>
        Actualice y de ser necesario puede dar de baja a los  <cite title="Source Title">Usuarios</cite>
      </figcaption>
    </figure>
    
    <br>
    <div class="table-responsive">
    <table class= "table table-bordered " >
        <thead>
          <tr >
            <th scope="col">Id</th>
            <th scope="col">Paterno</th>
            <th scope="col">Materno</th>
            <th scope="col">Nombre</th>
            <th scope="col">Ci</th>
            <th scope="col">Registro</th>
            <th scope="col">Tipo de usuario</th>
            <th scope="col">E-mail</th>
            <th></th>
            <th></th>
            
          </tr>
        </thead>
        <tbody >
    
            @foreach ($usuarios as $usuario)
          <tr >
            <td  >{{ $usuario->id}}</td>
            <td>{{ $usuario->ape_paterno }}</td>
            <td>{{ $usuario->ape_materno }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->ci }}</td>
            <td>{{ $usuario->fechaRegistro }}</td>
            <td>{{ $usuario->tipo }}</td>
            <td>{{ $usuario->email }}</td>
            <td> 
                <a href="{{url('administrador/usuario/'.$usuario->id.'/edit')}}"  class="btn btn-warning"  role="button">Editar</a>
           
              </td>
            <td> 
            <form action="{{url('administrador/usuario/'.$usuario->id)}}" method="post">
             @csrf
             <!--  covertimos el metod_field en delete ya que es lo que espera la funcion store del controlador -->
            {{method_field('DELETE')}}
            <!--onclick retorna un mensaje de confirmacion antes de realizar el submit -->
            <input type="submit" onclick="return confirm('esta accion es irreversible')" value="Dar de baja"  class="btn btn-danger" >
            
          </form>
            </td>
            
          </tr>
          @endforeach

        </tbody>
    </table>
   
</div>

@stop
