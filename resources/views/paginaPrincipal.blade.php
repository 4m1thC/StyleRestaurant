@extends('layouts.app')

@section('content')
    <div class="container-fluid cover-slides">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="img/slider-01.png" id="slide" class="d-block w-100" alt="..." height="500em">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br>
                            trends to see any changes in performance over time.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="img/slider-02.png" id="slide" class="d-block w-100" alt="..." height="500em">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br>
                            trends to see any changes in performance over time.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slider-03.png" id="slide" class="d-block w-100" alt="..." height="500em">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br>
                            trends to see any changes in performance over time.</p>
                        <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start About -->
    <br>
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 text-right">
                    <div class="inner-column shadow-lg p-3 mb-5 bg-body rounded">
                        <h1>Welcome To <span>Live Dinner Restaurant</span></h1>
                        <h4>Little Story</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut
                            at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante
                            sodales augue, eget lacinia lectus erat et sem. </p>
                        <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a
                            pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.
                        </p>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="img/about-img.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <p class="lead ">
                        " If you're not the one cooking, stay out of the way and compliment the chef. "
                    </p>
                    <span class="lead">Michael Strahan</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->
@endsection
