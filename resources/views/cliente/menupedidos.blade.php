@extends('layouts.app')

@section('content')
    <div class="all-page-title page-breadcrumb">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-lg-12 mt-3">
                    <h1 class="text-uppercase" style="font:bold; color:white;">Productos</h1>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="container">

        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="row">

                    @foreach ($menu->productos as $pro)
                        <div class="col-lg-4 col-md-6 special-grid drinks rounded">
                            <div class="gallery-single fix bg-body">
                                <img src="{{ $pro->img }}" class="img-fluid" style="width: 100vh; height: 15em;"
                                    alt="{{ $pro->img }}">
                                <div class="why-text">
                                    <h4 class="text-center">
                                        <a class="link-dark" href="{{ route('producto.show1', $pro->id) }}">
                                            {{ $pro->nombre }}
                                        </a>
                                    </h4>
                                    <h5 class="text-center">PRECIO: ${{ $pro->costo }}</h5>
                                </div>
                                <div class="card-footer m-2" style="background-color: white;">

                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->nombre }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->costo }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->img }}" id="img" name="img">

                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="card-footer" style="background-color: white;">
                                            <div class="row">
                                                <button class="btn btn-secondary btn-sm" class="tooltip-test"
                                                    title="add to cart">
                                                    <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--<div class="row">
                                        <button class="btn btn-secondary btn-sm" class="tooltip-test" title="add to cart">
                                            <i class="fa fa-shopping-cart"></i> agregar al carrito
                                        </button>
                                    </div>-->
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    <!--<div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <hr>

                        <div class="row">
                            @foreach ($menu->productos as $pro)
    <div class="col-lg-3">
                                    <div class="card" style="margin-bottom: 20px; height: auto;">
                                        <img src="{{ $pro->img }}" class="card-img-top mx-auto"
                                            style="height: 150px; width: 150px;display: block;" alt="{{ $pro->img }}">
                                        <div class="card-body">
                                            <a href="{{ route('producto.show1', $pro->id) }}">
                                                <h6 class="card-title">{{ $pro->nombre }}</h6>
                                            </a>
                                            <p>${{ $pro->costo }}</p>
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                                <input type="hidden" value="{{ $pro->nombre }}" id="name" name="name">
                                                <input type="hidden" value="{{ $pro->costo }}" id="price" name="price">
                                                <input type="hidden" value="{{ $pro->img }}" id="img" name="img">

                                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                <div class="card-footer" style="background-color: white;">
                                                    <div class="row">
                                                        <button class="btn btn-secondary btn-sm" class="tooltip-test"
                                                            title="add to cart">
                                                            <i class="fa fa-shopping-cart"></i> agregar al carrito
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
    @endforeach
                        </div>
                    </div>
                </div>
            </div>-->
@endsection
