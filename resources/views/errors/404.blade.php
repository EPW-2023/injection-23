@extends('layout.layout')
@section('content')
    <img src="{{ asset('img/Logo EPW.png') }}" class="logo-epw m-3" alt="Engineering Physics Week (EPW) Logo">
    <div id="bg-404-error">
        <div class="container-batik"><img src="{{ asset('img/Batik.png') }}" class="batik" alt=""></div>
        <div class="prev-comingsoon-construct">
            <div class="container">
                <div>
                    <div class="wrapper-comingsoon-text">
                        <div>
                            <img class="img-fluid" src="{{ asset('img/City.png') }}" alt="Future City in reality"
                                width="300" height="300">
                        </div>
                        <div>
                            <h1 class="on-comingsoon-text fw-bold">404 Not Found</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
