@extends('layouts.app')

@section('content')
    <div class="all-page-title page-breadcrumb">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Menu del Dia</h1>
                    <h2 class="text-uppercase" style="font:bold; color:white;">Este es el menu del dia {{ $menu->dia }}
                        </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!--<nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                                                                <li class="breadcrumb-item active" aria-current="page">Menu</li>
                                                            </ol>
                                        </nav>-->


        <div class="row">
            <div class="col-lg-12">
                <!--<div class="row">
                                                            <div class="col-lg text-uppercase text-center text-wrap">

                                                                <h1 style="font:bold; color:white;">Este es el menu del dia: {{ $menu->dia }}</h3>

                                                            </div>
                                                        </div>-->
                <div class="col-lg-7">
                    <br>
                    <div class="center">
                        <a class="btn btn-danger btn-lg left pull-right" href={{ route('pedido.index1') }}>Crear
                            Pedido</a>
                    </div>
                </div>
            </div>
            <hr>

            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row">

                        @foreach ($menu->productos as $pro)
                            <div class="col-lg-4 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">

                                    <img src="{{ $pro->img }}" class="img-fluid" 
                                    style="width: 100vh; height: 15em;" 
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

                        <!--@foreach ($menu->productos as $pro)
                            <div class="col-lg-3">
                                <div class="card" style="margin-bottom: 20px; height: auto;">
                                    <img src="{{ $pro->img }}" class="card-img-top mx-auto"
                                        style="height: 150px; width: 150px; display: block;" alt="{{ $pro->img }}">
                                    <div class="card-body">
                                        <a href="{{ route('producto.show1', $pro->id) }}">
                                            <h6 class="card-title">{{ $pro->nombre }}</h6>
                                        </a>
                                        <h8>{{ $pro->descripcion }}</h8>
                                        <p>${{ $pro->costo }}</p>

                                    </div>
                                </div>
                            </div>
                        @endforeach-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
