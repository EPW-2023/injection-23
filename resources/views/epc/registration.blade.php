@extends('layout.layout')
@section('content')
    <div class="bg-epc-registration">
        <div class="container-batik"><img src="{{ asset('img/Batik.png') }}" class="batik" alt=""></div>
        <div class="container-epc-boxes">
            <div class="box">
                <div class="container">
                    <p class="text-center mt-4 fw-bold data-tim-header">Data Tim</p>
                    <div class="mb-3">
                        <label for="nama_tim" class="form-label nama-tim-label">Nama Tim</label>
                        <input type="text" class="form-control" id="nama_tim" name="nama_tim">
                    </div>
                </div>
            </div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
    </div>
@endsection
