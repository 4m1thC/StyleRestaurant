
@extends('chef/diseños/plantillaBase')
@section('contenido')

<figure class="text-center">
  <figcaption class="blockquote-footer" >
    <b style="color:#c21d1d"> <h3> PEDIDO ID:{{$pedido->id}}</h3></b>
    Prepare el pedido y se notificara al camarero cuando este <cite title="Source Title">listo</cite>
  </figcaption>
</figure><br>

<table class="table table-hover">
    <tr>
        <th >Codigo</th >
        <th  >Nombre</th >
        <th  >Cantidad</th >
        <th  >Descripcion</th >
        <th  >Imagen</th >
    </tr> 
   
    @foreach($productos as $grupo)
    <tr style="background-color: #f4f4ea" > <td class = "text-center" colspan="6" >{{"Categoria: ".$grupo->first()->categoria}}</td> </tr>
    @foreach($grupo as $producto)
    <tr>
        <td >{{$producto->id}}</td>
        <td >{{$producto->nombre}}</td>
        <td >{{$producto->costo}}</td>
        <td >{{$producto->descripcion}}</td>
        <td ><img src="{{asset('storage').'/'.$producto->img}}" alt="" width="100" height="50">
        </td>
        <td >
            <!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong">
    ver ingregientes
  </button>
  
  <!-- Modal -->
  
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title text-center" id="exampleModalLongTitle">{{$producto->nombre}}</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <img  src="{{asset('storage').'/'.'uploads/ingredientes.jpg'}}" width="576" height="300" data-toggle="modal" data-target="#exampleModal"/>
        </div>
        <div class="modal-body">
         
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">categoria</th>
                    <th scope="col">stock</th>
                    <th scope="col">unidadmedida</th>
                  </tr>
                </thead>
                <tbody>
                  
                    @foreach($producto->ingredientes()->get() as $ingrediente)
                    @php
                     $out = new \Symfony\Component\Console\Output\ConsoleOutput();
                $out->writeln($ingrediente->nombre);  
                  @endphp
                  <tr>
                    <th scope="row">{{ $ingrediente->id}}</th>
                    <td>{{ $ingrediente->nombre}}</td>
                    <td>{{ $ingrediente->categoria}}</td>
                    <td>{{ $ingrediente->stock}}</td>
                    <td>{{ $ingrediente->unidadmedida}}</td>

                  </tr>
                  @endforeach
                </tbody>
              </table>  

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>


        </td>
    </tr>
    @endforeach
    @endforeach
  </table>
  <div class="row">
    <div class="col-md-4">
    <form action="{{url('chef/pedido/'.$pedido->id.'/preparado')}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
    <input type="submit" value="Pedido Listo" class="btn btn-warning"  onclick="return confirm('¿esta seguro que el pedido esta listo?, se le notificara al camarero')">
    </form>
  </div>
  <div class="col-md-4">  
    <a class="btn btn-danger" href="{{url('chef/pedidos')}}" role="button">Otro Pedido</a>
   </div>
  </div>
@stop