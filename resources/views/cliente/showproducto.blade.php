@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">

        <div class="row justify-content-center m-0">
            <div class="col-lg-12 ">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="text-capitalize text-center"
                            style="font-family: font-family:'Franklin Gothic Medium',
                     'Arial Narrow', Arial, sans-serif">
                            Categoria: {{ $producto->categoria }}</h4>
                        <br>
                        <figure class="figure">
                            <img src="{{ $producto->img }}" class="figure-img img-fluid rounded" card-img-top mx-auto
                                style="height: 300px; width: 100%;display: block;" alt="...">
                            <figcaption class="figure-caption">
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <h3 class="text-center text-uppercase"
                                style="font-family:'Franklin Gothic Medium','Arial Narrow', Arial, sans-serif">
                                Ingredientes</h3>
                            <br>
                            <table class="table" style="background-color:aquamarine">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Ingredientes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($producto->Ingredientes as $item)
                                        <tr>
                                            <th scope="row">{{ $item->pivot->idIngrediente }}</th>
                                            <td>{{ $item->nombre }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
                <div class="card" style="width: 28rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $producto->nombre }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Precio del Almuerzo: ${{ $producto->costo }}</h6>
                        <p class="card-text">{{ $producto->descripcion }} Un texto de ejemplo rápido para colocal cerca del
                            título de la tarjeta y componer la mayor parte del contenido de la tarjeta.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
