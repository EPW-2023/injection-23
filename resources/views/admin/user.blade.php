@extends('layout.admin')
@section('admin')
    <h1>Create New Admin</h1>
    <form method="POST" action="{{ route('create-admin') }}">
        @csrf
        <div class="create-admin-container">
            <div class="mb-3">
                <label for="username" class="form-label">
                    Username
                </label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">
                    Password
                </label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button class="btn btn-primary" type="submit">Create New Admin</button>
        </div>
    </form>
@endsection
