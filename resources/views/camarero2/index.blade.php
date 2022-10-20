@extends('administrador/diseños/plantillaBase')
@section('contenido')
 
    <h2 class="text-center">Lista de Usuarios</h2> <br>
    <div class="table-responsive">
    <table class="table table-hover">
        <thead>
          <tr style="background-color: #EAFAF1 ">
            <th scope="col">Id</th>
            <th scope="col">Ci</th>
            <th scope="col">Nombre</th>
            <th scope="col">Paterno</th>
            <th scope="col">Materno</th>
            <th scope="col">Registro</th>
            <th scope="col">Tipo</th>
            <th scope="col">Password</th>
            <th scope="col">Email</th>
            <th></th>
            <th></th>
            
          </tr>
        </thead>
        <tbody>
    
            @foreach ($usuarios as $usuario)
          <tr >
            <th scope="row" >{{ $usuario->id}}</th>
            <td>{{ $usuario->ci }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->ape_paterno }}</td>
            <td>{{ $usuario->ape_materno }}</td>
            <td>{{ $usuario->fechaRegistro }}</td>
            <td>{{ $usuario->tipo }}</td>
            <td>{{ $usuario->password }}</td>
            <td>{{ $usuario->email }}</td>
            <td> 
                <a href="{{url('administrador/usuario/'.$usuario->id.'/edit')}}"  >Editar</a>
            </td>
            <td> 
            <form action="{{url('administrador/usuario/'.$usuario->id)}}" method="post">
             @csrf
             <!--  covertimos el metod_field en delete ya que es lo que espera la funcion store del controlador -->
            {{method_field('DELETE')}}
            <!--onclick retorna un mensaje de confirmacion antes de realizar el submit -->
            <input type="submit" onclick="return confirm('esta accion es irreversible')" value="Eliminar"  class="btn btn-danger" >
            </form>
            </td>
            
          </tr>
          @endforeach

        </tbody>
    </table>
</div>
    


@stop
