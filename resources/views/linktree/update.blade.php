@extends('layout.layout')
@section('content')
    <div class="table-linktree">
        <div class="card card-create-link">
            <h3 class="text-center mb-4">Update Linktree</h3>
            <form action="/linktree/{{ $linktree->id }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama"
                        value="{{ old('nama', $linktree->nama) }}">
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" class="form-control" id="link" name="link"
                        value="{{ old('link', $linktree->link) }}">
                </div>
                <button class="btn btn-primary">Update!</button>
            </form>
        </div>
    </div>
@endsection
