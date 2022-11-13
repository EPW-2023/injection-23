@extends('layout.admin')
@section('admin')
    <h1>Uploaded Files</h1>
    <p>Berkas-berkas semua ada disini</p>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th scope="col">Nama Tim</th>
                <th scope="col">Foto Ketua</th>
                <th scope="col">Foto Anggota 1</th>
                <th scope="col">Foto Anggota 2</th>
                <th scope="col">Kartu Pelajar Ketua</th>
                <th scope="col">Kartu Pelajar Anggota 1</th>
                <th scope="col">Kartu Pelajar Anggota 2</th>
                <th scope="col">Bukti Pembayaran</th>
                <th scope="col">Pemilik Rekening</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applicants as $item)
                @php
                    if ($item->nama_anggota2 == null) {
                        $disabled = 'disabled';
                    } else {
                        $disabled = '';
                    }
                @endphp
                <tr>
                    <td>{{ $item->namatim }}</td>
                    <td><a href="/admin/download-foto-ketua/{{ $item->id }}" class="btn btn-danger">Download</a></td>
                    <td><a href="/admin/download-foto-anggota1/{{ $item->id }}" class="btn btn-danger">Download</a></td>
                    <td><a href="/admin/download-foto-anggota2/{{ $item->id }}"
                            class="btn btn-danger {{ $disabled }}">Download</a></td>
                    <td><a href="/admin/download-kartu-pelajar-ketua/{{ $item->id }}"
                            class="btn btn-danger">Download</a></td>
                    <td><a href="/admin/download-kartu-pelajar-anggota1/{{ $item->id }}"
                            class="btn btn-danger">Download</a></td>
                    <td><a href="/admin/download-kartu-pelajar-anggota2/{{ $item->id }}"
                            class="btn btn-danger {{ $disabled }}">Download</a></td>
                    <td><a href="/admin/download-bukti-pembayaran/{{ $item->id }}" class="btn btn-danger">Download</a>
                    </td>
                    <td>
                        {{ $item->nama_pemilik_rekening }}
                    </td>
                    {{-- <td>{{ $item->foto_ketua }}</td>
                    <td>{{ $item->foto_anggota1 }}</td>
                    <td>{{ $item->foto_anggota2 }}</td>
                    <td>{{ $item->kartu_pelajar_ketua }}</td>
                    <td>{{ $item->kartu_pelajar_anggota1 }}</td>
                    <td>{{ $item->kartu_pelajar_anggota2 }}</td>
                    <td>{{ $item->nama_pemilik_rekening }}</td>
                    <td>{{ $item->bukti_pembayaran }}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
