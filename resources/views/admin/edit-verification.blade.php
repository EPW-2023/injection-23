@extends('layout.admin')
@section('admin')
    <div class="container">
        <form action="/admin/verification/{{ $verification->id }}" method="POST">
            @method('put')
            @csrf
            <label for="verify_status" class="form-label">Verify Status : {{ $verification->verified }}</label>
            <select class="form-control px-1 mb-3" style="width: 25%" name="verified" id="verify_status">
                <option value="true">true</option>
                <option value="false">false</option>
            </select>
            <button class="btn btn-success">Change Status</button>
        </form>
    </div>
@endsection
