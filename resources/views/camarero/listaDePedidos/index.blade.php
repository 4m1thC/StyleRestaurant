@extends('camarero.plantillaBaseCamarero')
@section('contenido')


<h2 class="text-center">LISTA DE PEDIDOS</h2> <br>
    <div class="table-responsive">
    <table class="table table-hover">
        <thead>
          <tr style="background-color: #EAFAF1 ">
            

            <th scope="col">ID_ PEDIDO</th>
            <th scope="col">TIPO</th>
            <th scope="col">ID_CAJERO</th>
            <th scope="col">ID_CLIENTE</th>
            <th scope="col">ID_CAMARERO</th>

            <th scope="col">FECHA_PEDIDO</th>
            <th scope="col">PECHA_FACTURACION</th>
            <th scope="col">OBSERVACIONES</th>
            <th scope="col">ESTADO</th>
           
          </tr>
        </thead>
        <tbody>
    
          @foreach ($pedidos as $pedido)
          <tr>
              <th scope="row" >{{ $pedido->id}}</th>
              <td>{{ $pedido->tipo}}</td>
              <td>{{ $pedido->idCajero}}</td>
              <td>{{ $pedido->idCliente}}</td>

              <td>{{ $pedido->idCamarero}}</td>
              <td>{{ $pedido->fechaP}}</td>
              <td>{{ $pedido->fechaF}}</td>
              <td>{{ $pedido->obs}}</td>
              <td>{{ $pedido->estado}}</td>

              <td>Editar | Borrar</td>
              
              
          </tr> 

            
                
           
<!--FFFFFFFFFFFFFFFFFFFFFFFFFF-->
             
            
         
       @endforeach
       </tbody>
       
    
    </table>

    </div>

<!--<script src="{{ asset('js/jQuery-2.1.4.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
            alert("hola")
        });
$('.mi_checkbox').change(function() {
    //Verifico el estado del checkbox, si esta seleccionado sera igual a 1 de lo contrario sera igual a 0
    alert("hola")
    var estatus = $(this).prop('checked') == true ? 1 : 0; 
    var id = $(this).data('id'); 
        console.log(estatus);
    $.ajax({
        type: "GET",
        dataType: "json",
      //url: '/StatusNoticia',
        url: '{{ route('updatestatus') }}',
        data: {'estatus': estatus, 'id': id},
        success: function(data){
            $('#resp' + id).html(data.var); 
            console.log(data.var)
         
        }
    });
})
      
});
</script>-->
@endsection
