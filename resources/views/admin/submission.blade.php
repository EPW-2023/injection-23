@extends('layout.admin')
@section('admin')
    <h1>Paper Submission</h1>
    <p>Berkas-berkas semua ada disini</p>
    <table class="table table-bordered" style="width: 70%">
        <thead>
            <tr>
                <th class="text-center" scope="col">Submission User</th>
                <th class="text-center" scope="col">Submission Paper</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($submissions as $item)
                <tr>
                    <td class="text-center">{{ $item->submission_user }}</td>
                    <td class="d-flex justify-content-center"><a href="/admin/download-paper-submission/{{ $item->id }}"
                            class="btn btn-danger">Download</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
