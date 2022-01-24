@extends('layouts.app')

@section('content')
            <div class="container">
        <main class="py-1">
            <div class="content">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="100">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="{{ url('home') }}"><img src="{{ url('images/1.jpg')}}" class="d-block w-100" alt="..."></a>
                            <div class="carousel-caption d-none d-md-block">
                                <a href="{{ url('home') }}" class="btn btn-light stretched-link"> Shop Now </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="{{ url('home') }}"><img src="{{ url('images/2.jpg')}}" class="d-block w-100" alt="..."></a>
                            <div class="carousel-caption d-none d-md-block">
                                <a href="{{ url('home') }}" class="btn btn-light stretched-link"> Shop Now </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <a href="{{ url('home') }}"><img src="{{ url('images/3.jpg')}}" class="d-block w-100" alt="..."></a>
                            <div class="carousel-caption d-none d-md-block">
                                <a href="{{ url('home') }}" class="btn btn-light stretched-link"> Shop Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <br>
            </br>
        </main>
    </div>
    @endsection