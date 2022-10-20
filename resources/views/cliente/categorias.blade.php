@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">





        @foreach ($productos as $grupo)
            <div class="all-page-title page-breadcrumb">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-capitalize"> {{ 'Categoria ' . $grupo->first()->categoria }} </h1>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mx-4">

                @foreach ($grupo as $pro)
                    <div class="col-lg-4 col-md-6 special-grid drinks">
                        <div class="gallery-single fix">

                            <img src="{{ $pro->img }}" class="img-fluid" style="width: 100vh; height: 15em;"
                                alt="{{ $pro->img }}">
                            <div class="why-text">
                                <h4 class="text-center">
                                    <a href="{{ route('producto.show1', $pro->id) }}">
                                        {{ $pro->nombre }}
                                    </a>
                                </h4>
                                <p>{{ $pro->descripcion }}</p>
                                <h5>${{ $pro->costo }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
