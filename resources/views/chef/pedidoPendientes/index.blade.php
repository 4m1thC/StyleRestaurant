@extends('chef/diseños/plantillaBase')
@section('contenido')
 
<figure class="text-center">
  <figcaption class="blockquote-footer" >
    <b style="color:#c21d1d"> <h3> PEDIDOS PENDIENTES</h3></b>
    Prepare el pedido y se notificara al camarero cuando este <cite title="Source Title">listo</cite>
  </figcaption>
</figure><br>
    <div class="table-responsive">
    <table class="table align-middle">
        <thead>
          <tr  class="align-middle">
            <th scope="col">Id</th>
            <th scope="col">Datos generales</th>
            <th scope="col">Productos</th>
            <th scope="col">Datos del Cliente</th>
            <th scope="col">Cajero que facturo</th>
            <th scope="col">Camarero Responsable</th>
            
            <th></th>
            <th></th>
            
          </tr>
        </thead>
        <tbody>
    
            @foreach ($pedidos as $pedido)
          <tr class="align-middle">
            <th scope="row" >{{ $pedido->id}}</th>

            <td>{{ "TIPO DE PEDIDO:".$pedido->tipo }}
            <br>{{ "OBSERVACIONES: ".$pedido->obs }}
            <br>{{ "ESTADO DE CONFIRMACION: ".$pedido->estado }}
            <br>{{ "ESTADO DEL PEDIDO: ".$pedido->estadoPed }}</td>

            <td>{{  $pedido->productos1()->get()->countBy("categoria")}}</td>
            <td>
              {{ ($pedido->cliente1) ? "CI: ".$pedido->cliente1->usuario->ci : ''}} <br>
              {{ ($pedido->cliente1) ? "NOMBRE: ".$pedido->cliente1->usuario->nombre." ".$pedido->cliente1->usuario->ape_paterno." ".$pedido->cliente1->usuario->ape_materno : ''}} <br>
              {{ ($pedido->cliente1) ? "FECHA Y HORA DEL PEDIDO: ".$pedido->fechaP : ''}}
            </td>
            <td>{{ ($pedido->cajero) ? "CI: ".$pedido->cajero->usuario->ci : ''}} <br>
              {{ ($pedido->cajero) ? "NOMBRE: ".$pedido->cajero->usuario->nombre." ".$pedido->cajero->usuario->ape_paterno." ".$pedido->cajero->usuario->ape_materno : ''}} <br>
              {{ ($pedido->cajero) ? "FECHA Y HORA DE LA FACTURACION ".$pedido->fechaF : ''}}
            </td>
            <td> 
              @php
                if (isset($pedido->camarero)){echo "CI: ".$pedido->camarero->usuario->ci."<br>"."NOMBRE: ".$pedido->camarero->usuario->nombre." ".$pedido->camarero->usuario->ape_paterno." ".$pedido->camarero->usuario->ape_materno;}
            @endphp  
            </td>
            <td class="align-middle"> 
               <a href="{{url('chef/pedidos/productos/'.$pedido->id)}}"  class="btn btn-warning"  role="button" >Preparar pedido</a>
            </td>
           
            
            
          </tr>
          @endforeach

        </tbody>
    </table>
</div>
    


@stop
