@extends('layout.layout')
@section('content')
    <div id="bg-404-error">
        <div class="container-batik"><img src="{{ asset('img/Batik.png') }}" class="batik" alt=""></div>
        <div class="prev-404-construct">
            <div class="container">
                <div class="wrapper-image-text">
                    <div class="">
                        <img class="img-fluid future-city" src="{{ asset('img/City.png') }}" alt="Future City in reality">
                    </div>
                    <div class="">
                        <h1 class="on-404-text">404 Page Not Found</h1>
                        <p class="on-404-paraf">Oops... something is wrong</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
