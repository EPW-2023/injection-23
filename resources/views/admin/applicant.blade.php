@extends('layout.admin')
@section('admin')
    <h1>Applicant</h1>
    <table class="table table-bordered table-responsive" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">Sekolah</th>
                <th scope="col">Kota</th>
                <th scope="col">Nama Tim</th>
                <th scope="col">Nama Ketua</th>
                <th scope="col">NISN Ketua</th>
                <th scope="col">Nama Anggota 1</th>
                <th scope="col">NISN Anggota 1</th>
                <th scope="col">Nama Anggota 2</th>
                <th scope="col">NISN Anggota 2</th>
                <th scope="col">Email Ketua</th>
                <th scope="col">No HP Ketua</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applicants as $item)
                <tr>
                    <td>{{ $item->asalsekolah }}</td>
                    <td>{{ $item->kota }}</td>
                    <td>{{ $item->namatim }}</td>
                    <td>{{ $item->nama_ketua }}</td>
                    <td>{{ $item->nisn_ketua }}</td>
                    <td>{{ $item->nama_anggota1 }}</td>
                    <td>{{ $item->nisn_anggota1 }}</td>
                    <td>{{ $item->nama_anggota2 }}</td>
                    <td>{{ $item->nisn_anggota2 }}</td>
                    <td>{{ $item->email_ketua }}</td>
                    <td>{{ $item->nohp_ketua }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
