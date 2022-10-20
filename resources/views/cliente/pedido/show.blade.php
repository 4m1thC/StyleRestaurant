@extends('cliente.plantillapedido')

@section('contenido')

<h2 class="text-center">Mi Pedido</h2> <br>
<h2 class="text-center">Este es tu ide de pedido: {{ $pedido->id }}</h2>
<h2 class="text-center">Para que se confirme tu pedido ve donde el cajero y paga con tu id de pedido</h2>
<div class="table-responsive">
<table class="table table-hover">
    <thead>
      <tr style="background-color: #EAFAF1 ">
        <th scope="col">Nombre</th>
        <th scope="col">imagen</th>
        <th scope="col">descripcion</th>
        <th scope="col">costo</th>
        <th scope="col">cantidad</th>
        <th></th>
        <th></th>
        
      </tr>
    </thead>
    <tbody>

        @foreach ($pedido->productos as $item)
      <tr >
        <td>{{ $item->nombre }}</td>
        <td>
          <img src="{{ $item->img }}"style="width: 50px; height: 50px;"></td>
        <td>{{ $item->descripcion }}</td>
        <td>{{ $item->costo }}</td>
        <td>{{ $item->pivot->cantidad }}</td>
        
        <td> 
        
        </td>
        
      </tr>
      @endforeach

    </tbody>
</table>
<tr style="background-color: #de1c1c ">
<h4>Total: {{$pedido->costoTotal}}</h4>
</tr>

<div class="col-lg-2">
  <br><a href="{{ route('menu.index1',compact('menu')) }}" type="button" class="btn btn-dark">Continue en la tienda</a>

</div>
</div>

@endsection