@extends('layouts.app')

@section('content')
   <div class="container-fluid py-5">
    <div class="col-10 mx-auto">
        <h1 class="text-center"><span style="color: #C43F52;">Canteens</span></h1>
        <div class="row row-cols-6 gap-3 justify-content-center align-items-center">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4">
                                <div style="background-color: #222222;">
                                    <a href="{{ route('menu',['id'=>1]) }}">
                                        <img src="path_to_image_1" class="d-block w-100" alt="" height="225vt">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div style="background-color: #FED700;">
                                    <a href="{{ route('menu',['id'=>2]) }}">
                                        <img src="path_to_image_2" class="d-block w-100" alt="" height="225vt">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div style="background-color: #DED5C6;">
                                    <a href="{{ route('menu',['id'=>3]) }}">
                                        <img src="path_to_image_3" class="d-block w-100" alt="" height="225vt">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" role="button"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" style="background-color: #C43F52;" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" role="button"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" style="background-color: #C43F52; " aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
    @endsection
