@extends('layout.layout')
@section('content')
    <form action="/register" method="POST">
        <div class="bg-epc-registration">
            <div class="container-batik"><img src="{{ asset('img/Batik.png') }}" class="batik" alt=""></div>
            
        </div>
    </form>
@endsection
