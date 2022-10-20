@extends('cliente.plantillapedido')

@section('contenido')
<h1>Completa el siguiente formulario para confirmar tu pedido</h1>
<div class="card">
    <div class="card-body">
        
        
        {!! Form::open(['route'=> 'pedido.store']) !!}
        <!--//aun falta cambiar si el pedido lo hizo el cliente o camarero-->
            
        {!! Form::hidden('idCliente', auth()->user()->id) !!}
        {!! Form::hidden('estado',false) !!}
        
       
            <div class="form-group">
                {!! Form::label('obs', 'obs') !!}
                {!! Form::text('obs', null, ['class'=>'form-control','placeholder'=>'Ingrese alguna observacion que tenga']) !!}
            @error('obs')
                    <small class="text-danger">{{$message}}</small>
            @enderror
            <div class="form-group">
                {!! Form::label('tipo', 'tipo') !!}
                {!!Form :: select ('tipo', ['personal','familiar',], 'personal')!!}
                @error('tipo')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('mesa_id', 'mesa_id') !!}
                {!! Form::select('mesa_id', $mesas, null, ['class'=>'form-control']) !!}
                @error('mesa_id')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            {!! Form::submit('Crear Pedido', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>


@endsection
