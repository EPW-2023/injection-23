@extends('layout.layout')
@section('content')
    <form action="/register" method="POST">
        <div class="bg-epc-registration">
            <div class="container-batik"><img src="{{ asset('img/Batik.png') }}" class="batik" alt=""></div>
            <div class="container-epc-boxes">
                {{-- Data Tim --}}
                <div class="box">
                    <div class="container">
                        <p class="text-center mt-4 fw-bold data-tim-header">Data Tim</p>
                        <div class="mb-3">
                            <label for="nama_tim" class="form-label nama-tim-label">Nama Tim</label>
                            <input type="text" class="form-control" id="nama_tim" name="nama_tim">
                        </div>
                        <div class="mb-3">
                            <label for="username_tim" class="form-label nama-tim-label">Username Tim</label>
                            <input type="text" class="form-control" id="username_tim" name="username_tim">
                        </div>
                        <div class="mb-3">
                            <label for="password_tim" class="form-label nama-tim-label">Password Tim</label>
                            <input type="text" class="form-control" id="password_tim" name="password_tim">
                        </div>
                        <div class="mb-3">
                            <label for="asal_sekolah" class="form-label nama-tim-label">Asal Sekolah</label>
                            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah">
                        </div>
                    </div>
                </div>
                {{-- Data Anggota --}}
                <div class="box">
                    <div class="container">
                        <p class="text-center mt-4 fw-bold data-tim-header">Data Anggota</p>
                        <div class="mb-3">
                            <label for="nama_ketua" class="form-label nama-tim-label">Nama Anggota 1 (Ketua)</label>
                            <input type="text" class="form-control" id="nama_ketua" name="nama_ketua">
                        </div>
                        <div class="mb-3">
                            <label for="nisn_ketua" class="form-label nama-tim-label">NISN Anggota 1 (Ketua)</label>
                            <input type="text" class="form-control" id="nisn_ketua" name="nisn_ketua">
                        </div>
                        <div class="mb-3">
                            <label for="nama_anggota2" class="form-label nama-tim-label">Nama Anggota 2</label>
                            <input type="text" class="form-control" id="nama_anggota2" name="nama_anggota2">
                        </div>
                        <div class="mb-3">
                            <label for="nisn_anggota2" class="form-label nama-tim-label">NISN Anggota 2</label>
                            <input type="text" class="form-control" id="nisn_anggota2" name="nisn_anggota2">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="kartu_pelajar_ketua" class="form-label label-file">Kartu
                                        Pelajar Anggota 1
                                        (Ketua)</label>
                                    <input type="file" class="form-control" id="kartu_pelajar_ketua"
                                        name="kartu_pelajar_ketua">
                                </div>
                                <div class="mb-3">
                                    <label for="kartu_pelajar_anggota2" class="form-label label-file">Kartu Pelajar Anggota
                                        2</label>
                                    <input type="file" class="form-control" id="kartu_pelajar_anggota2"
                                        name="kartu_pelajar_anggota2">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="kartu_pelajar_ketua" class="form-label label-file">Foto 4x3 Anggota 1
                                        (Ketua)</label>
                                    <input type="file" class="form-control" id="foto_ketua" name="foto_ketua">
                                </div>
                                <div class="mb-3">
                                    <label for="kartu_pelajar_anggota2" class="form-label label-file">Foto 4x3 Anggota
                                        2</label>
                                    <input type="file" class="form-control" id="foto_anggota2" name="foto_anggota2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- More data from the ketua --}}
                <div class="box">
                    <div class="container">
                        <div class="text-center mt-5 fw-bold data-tim-header"></div>
                        <div class="mb-3">
                            <label for="email_ketua" class="form-label nama-tim-label">Email (Ketua)</label>
                            <input type="email" class="form-control" id="email_ketua" name="email_ketua">
                        </div>
                        <div class="mb-3">
                            <label for="nohp_ketua" class="form-label nama-tim-label">No. HP (Ketua)</label>
                            <input type="text" class="form-control" id="nohp_ketua" name="nohp_ketua">
                        </div>
                        <div class="mb-3">
                            <label for="alamat_ketua" class="floatingTextarea nama-tim-label">Alamat (Ketua)</label>
                            <textarea style="height: 100px" class="form-control" id="alamat_ketua" name="alamat_ketua"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
