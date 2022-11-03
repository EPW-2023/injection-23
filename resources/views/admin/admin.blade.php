@extends('layout.layout')
@section('content')
    <h1>Halo {{ auth()->user()->username }}</h1>
    <form action="/logout" method="POST">
        @csrf
        <button class="btn btn-primary">Logout</button>
    </form>
@endsection
