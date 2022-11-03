@extends('layout.layout')
@section('content')
    <div class="table-linktree">
        <div class="card card-create-link">
            <h3 class="text-center mb-4">Login Admin EPW 2023</h3>
            <form action="/admin-login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button class="btn btn-primary">Login!</button>
            </form>
        </div>

    </div>
@endsection
