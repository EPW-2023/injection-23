@extends('layout.layout')
@section('content')
    <div class="table-linktree">
        <div class="card card-create-link">
            <h3 class="text-center mb-4">Create New Linktree</h3>
            <form action="/linktree" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" class="form-control" id="link" name="link">
                </div>
                <button class="btn btn-primary">Create New!</button>
            </form>
        </div>

    </div>
@endsection
