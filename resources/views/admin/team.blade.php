@extends('layout.admin')
@section('admin')
    <h1>Teams</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Nama Tim</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">Kota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $item)
                <tr>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->namatim }}</td>
                    <td>{{ $item->asalsekolah }}</td>
                    <td>{{ $item->kota }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
