@php
    $disabled = 'content-disabled opacity-50';
@endphp
@extends('layout.layout')
@section('content')
    <div class="bg-dashboard">
        <img src="{{ asset('img/bg-dashboard-batik.png') }}" class="dashboard-batik" alt="batik">
        @include('partials.navbar-dashboard')
        @if (auth()->user()->verified == 'true')
            <div class="d-flex justify-content-center">
                <div class="body-dashboard">
                    <div class="d-flex justify-content-center">
                        <div>
                            <img src="{{ asset('img/avatar.svg') }}" alt="avatar" width="100">
                        </div>
                    </div>
                    <div class="text-center">
                        <p>Hello, Team {{ auth()->user()->username }}</p>
                        <p>Silahkan lengkapi kelengkapan INJECTION berikut:</p>
                    </div>
                    <div class="dashboard-selection">
                        <div class="dashboard-option">
                            <a href="#" class="text-decoration-none  {{ $disabled }}">
                                <div class="selection-option guidebook">
                                    <div class="mx-auto px-5 py-3">
                                        <p>Pengumpulan paper science project (Gelombang I)</p>
                                        <p class="small">14 November - 7 Januari</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="dashboard-selection">
                        <div class="dashboard-option">
                            <a href="{{ route('submission-page') }}" class="text-decoration-none">
                                <div class="selection-option bank-soal">
                                    <div class="mx-auto px-5 py-3">
                                        <p>Pengumpulan paper science project (Gelombang II)</p>
                                        <p class="small">8 Januari - 20 Januari</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (auth()->user()->verified == 'false')
            <div class="body-dashboard">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/injection-header.png') }}" width="400" alt="epc header">
                </div>
                <div class="text-center mt-5">
                    <div class="fs-2">Mohon maaf, data registrasi anda belum terverifikasi</div>
                    <div class="fs-3">Silahkan Hubungi CP INJECTION 2023 untuk info lebih lanjut</div>
                </div>
            </div>
        @endif
    </div>
@endsection
