@extends('layout.admin')
@section('admin')
    <h1>Registration Fee</h1>
    <div class="container mt-5" style="width: 60%">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Registration Fee</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($regfee as $item)
                    <tr>
                        <td>{{ $item->registration_fee }}</td>
                        <td><a href="/admin/registration-fee/{{ $item->id }}/edit" class="btn btn-warning">Update</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
