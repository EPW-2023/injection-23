@extends('layout.layout')
@section('content')
    <div class="bg-epc-registered">
        @include('partials.navbar-dashboard')
        <div class="d-flex justify-content-center">
            <img src="{{ asset('img/injection-header.png') }}" width="600" alt="epc header">
        </div>
        <div class="text-center fs-3 mt-5">Mohon maaf, data registrasi anda belum terverifikasi</div>
    </div>
@endsection
