@extends('camarero.plantillaBaseCamarero')
@section('contenido')


<h2 class="text-center">GESTION DE MESAS</h2> <br>
    <div class="table-responsive">
    <table class="table table-hover">
        <thead>
          <tr style="background-color: #EAFAF1 ">
            <th scope="col">ID_MESA</th>
            <th scope="col">CAPACIDAD</th>
            <th scope="col">PISO</th>
            <th scope="col">ESTADO</th>
            <th scope="col">ID_CAMARERO</th>
           
          </tr>
        </thead>
        <tbody>
    
          @foreach ($mesas as $mesa)
          <tr>
              <th scope="row" >{{ $mesa->id}}</th>
              <td>{{ $mesa->capacidad}}</td>
              <td>{{ $mesa->ubicacion}}</td>
              <td>{{ $mesa->estado}}</td>


              <!-- INICIO MODIFICACION-->
              
            
                
           
<!--FFFFFFFFFFFFFFFFFFFFFFFFFF-->
             
            <!-- FINAL MODIFICACION-->
            <td id="resp{{$mesa->id}}">
              <br> 
                 @if($mesa->estatus == 'desocupado')
                 <button type="button" class="btn btn-sm btn-success">activa</button>
                 @else
                 <button type="button" class="btn btn-sm btn-danger">inactivo</button>
                @endif
              </br>

            </td>
            <!--<td>
                <br>
                  <label class="switch">
                    <input data-id="{{$mesa->id}}" class="mi_checkbox" type="checkbox" data-onstyle="success" data-offstyle="danger" data_toggle="toggle" data-on="activo" data-off="inactivo" {{ $mesa->estatus ? 'checked' : ''}}>
                  
                    <span class="slider round"></span>
                  </label>
            </td>-->
            <td>
                            <br>
                            <label class="switch">
                                <input data-id="{{ $mesa->id }}" class="mi_checkbox" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $mesa->estatus ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </td>
            <td> 
            
          </tr>

       </tbody>
       @endforeach
    
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
