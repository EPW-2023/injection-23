@extends('layout.admin')
@section('admin')
    <h1>Verify Users</h1>
    <p>Silahkan verif para user yang diinginkan pada tabel berikut :</p>
    <table class="table table-bordered" style="width: 70%">
        <thead>
            <tr>
                <th class="text-center" scope="col">Nama Tim</th>
                <th class="text-center" scope="col">Username</th>
                <th class="text-center" scope="col">Status</th>
                <th class="text-center" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <td class="text-center">{{ $item->namatim }}</td>
                    <td class="text-center">{{ $item->username }}</td>
                    <td class="text-center">{{ $item->verified }}</td>
                    <td class="text-center">
                        <a href="/admin/verification/{{ $item->id }}/edit" type="submit"
                            class="btn btn-success">Change</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
