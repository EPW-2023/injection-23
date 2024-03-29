@extends('layout.layout')
@section('content')
    <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf
        <div id="bg-epc-registration">
            <div class="container-batik"><img src="{{ asset('img/batik-panjang.png') }}" class="batik img-fluid"></div>
            @include('partials.navbar')
            <div class="container mt-3">
                <div class="container container-form">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{ asset('img/injection-header.png') }}" class="img-fluid" alt="lambang EPC 2023">
                    </div>
                    <h1 class="text-center fst-italic">Registration</h1>
                    <div class="body-form mt-3">
                        <div class="section-form mb-3">1. Akun Tim</div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="namatim" class="form-label">
                                    Nama Tim
                                </label>
                                <input type="text"
                                    class="form-control @error('namatim')
                                    is-invalid
                                @enderror"
                                    id="namatim" name="namatim" placeholder="Nama Tim">
                                @error('namatim')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">
                                    Password
                                </label>
                                <input type="password"
                                    class="form-control @error('password')
                                    is-invalid
                                @enderror"
                                    id="password" name="password" placeholder="Password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="username" class="form-label">
                                    Username Tim
                                </label>
                                <input type="text"
                                    class="form-control @error('username')
                                    is-invalid
                                @enderror"
                                    id="usernametim" name="username" placeholder="Username Tim">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="confpassword" class="form-label">
                                    Confirm Password
                                </label>
                                <input type="password" class="form-control" id="confpassword" name="confpassword"
                                    placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="my-4"></div>
                        <div class="section-form mb-3">2. Biodata Tim</div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="asalsekolah" class="form-label">
                                    Asal Sekolah
                                </label>
                                <input type="text"
                                    class="form-control @error('asalsekolah')
                                    is-invalid
                                @enderror"
                                    id="asalsekolah" name="asalsekolah" placeholder="Asal Sekolah">
                                @error('asalsekolah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="kota" class="form-label">
                                    Kota
                                </label>
                                <input type="text"
                                    class="form-control @error('kota')
                                    is-invalid
                                @enderror"
                                    id="kota" name="kota" placeholder="Kota">
                                @error('kota')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="my-4"></div>
                        {{-- Ketua --}}
                        <div class="section-form mb-3 bio-header">Ketua</div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama_ketua" class="form-label">
                                    Nama Ketua
                                </label>
                                <input type="text"
                                    class="form-control @error('nama_ketua')
                                    is-invalid
                                @enderror"
                                    id="nama_ketua" name="nama_ketua" placeholder="Nama Ketua">
                                @error('nama_ketua')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="nisn_ketua" class="form-label">
                                    NISN Ketua
                                </label>
                                <input type="text"
                                    class="form-control @error('nisn_ketua')
                                    is-invalid
                                @enderror"
                                    id="nisn_ketua" name="nisn_ketua" placeholder="NISN Ketua">
                                @error('nisn_ketua')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nohp_ketua" class="form-label">
                                    No. HP
                                </label>
                                <input type="text"
                                    class="form-control @error('nohp_ketua')
                                    is-invalid
                                @enderror"
                                    id="nohp_ketua" name="nohp_ketua" placeholder="No HP">
                                @error('nohp_ketua')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email_ketua" class="form-label">
                                    Email
                                </label>
                                <input type="email"
                                    class="form-control @error('email_ketua')
                                    is-invalid
                                @enderror"
                                    id="email_ketua" name="email_ketua" placeholder="Email">
                                @error('nohp_ketua')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- End of Ketua --}}

                        {{-- Anggota 1 --}}
                        <div class="section-form mb-3 bio-header">Anggota 1</div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama_anggota1" class="form-label">
                                    Nama Anggota 1
                                </label>
                                <input type="text"
                                    class="form-control @error('nama_anggota1')
                                    is-invalid
                                @enderror"
                                    id="nama_anggota1" name="nama_anggota1" placeholder="Nama Anggota 1">
                                @error('nama_anggota1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="nisn_anggota1" class="form-label">
                                    NISN
                                </label>
                                <input type="text"
                                    class="form-control @error('nisn_anggota1')
                                    is-invalid
                                @enderror"
                                    id="nisn_anggota1" name="nisn_anggota1" placeholder="NISN Anggota 1">
                                @error('nisn_anggota1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- End of Anggota 1 --}}
                        {{-- Anggota 2 --}}
                        <div class="section-form mt-4 mb-3 bio-header d-flex justify-content-between">
                            <div>Anggota 2</div>
                            <div data-bs-toggle="collapse" data-bs-target="#anggota2" aria-expanded="false"
                                aria-controls="anggota2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                    class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
                                </svg>
                            </div>
                        </div>
                        <div class="collapse" id="anggota2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="nama_anggota2" class="form-label">Nama Anggota 2</label>
                                        <input type="text"
                                            class="form-control @error('nama_anggota2')
                                            is-invalid
                                        @enderror"
                                            name="nama_anggota2" id="nama_anggota2" placeholder="Nama Anggota 2">
                                        @error('nama_anggota2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <label for="nisn_anggota2" class="form-label">NISN</label>
                                        <input type="text"
                                            class="form-control @error('nisn_anggota2')
                                            is-invalid
                                        @enderror"
                                            name="nisn_anggota2" id="nisn_anggota2" placeholder="NISN Anggota 2">
                                        @error('nama_anggota2')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End of Anggota 2 --}}
                        {{-- Berkas --}}
                        <div class="section-form mt-2 mb-3">3. Dokumen Pendukung</div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="upload_pas_foto" class="form-label fs-5 d-block">
                                    Pas Foto 4x3
                                </label>
                                <label for="foto_ketua" class="form-label">Ketua</label>
                                <input type="file"
                                    class="form-control @error('foto_ketua')
                                    is-invalid
                                @enderror mb-3"
                                    id="foto_ketua" name="foto_ketua">
                                @error('foto_ketua')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label for="foto_anggota1" class="form-label">Anggota 1</label>
                                <input type="file"
                                    class="form-control mb-3 @error('foto_anggota1')
                                is-invalid
                            @enderror"
                                    id="foto_anggota1" name="foto_anggota1">
                                @error('foto_anggota1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label for="foto_anggota2" class="form-label">Anggota 2</label>
                                <input type="file"
                                    class="form-control @error('foto_anggota2')
                                is-invalid
                            @enderror"
                                    id="foto_anggota2" name="foto_anggota2">
                                @error('foto_anggota2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="small">
                                    <label class="form-label mt-2 d-block">Format Penamaan :
                                        pasfoto_[posisi]_[nama]</label>
                                    <label class="form-label d-block">Format: .jpg, max. size 5 MB</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="upload_pas_foto" class="form-label fs-5 d-block">
                                    Scan Kartu Pelajar
                                </label>
                                <label for="kartu_pelajar_ketua" class="form-label">Ketua</label>
                                <input type="file"
                                    class="form-control mb-3 @error('kartu_pelajar_ketua')
                                is-invalid
                            @enderror"
                                    id="kartu_pelajar_ketua" name="kartu_pelajar_ketua">
                                @error('kartu_pelajar_ketua')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label for="kartu_pelajar_anggota1 " class="form-label">Anggota 1</label>
                                <input type="file"
                                    class="form-control mb-3 @error('kartu_pelajar_anggota1')
                                is-invalid
                            @enderror"
                                    id="kartu_pelajar_anggota1" name="kartu_pelajar_anggota1">
                                @error('kartu_pelajar_anggota1')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label for="kartu_pelajar_anggota2" class="form-label">Anggota 2</label>
                                <input type="file"
                                    class="form-control @error('kartu_pelajar_anggota2')
                                is-invalid
                            @enderror"
                                    id="kartu_pelajar_anggota2" name="kartu_pelajar_anggota2">
                                @error('kartu_pelajar_anggota2')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="small">
                                    <label class="form-label mt-2 d-block">Format Penamaan :
                                        kartupelajar_[posisi]_[nama]</label>
                                    <label class="form-label d-block">Format: .jpg, max. size 5 MB</label>
                                </div>
                            </div>
                        </div>
                        {{-- End of Berkas --}}
                        {{-- Pembayaran --}}
                        <div class="section-form mb-3">4. Pembayaran</div>
                        <div class="box-pembayaran d-flex justify-content-center mb-3">
                            <div class="container">
                                <p>Peserta membayar uang pendaftaran sebesar Rp @foreach ($registration_fee as $item)
                                        {{ $item->registration_fee }}
                                    @endforeach per tim melalui:
                                    (Jangan lupa menambahkan angka 1 di akhir nominal pendaftaran!)</p>
                                <ul>
                                    <li>
                                        <p><b>BRI</b> : 645701015708531 a.n. Agun Widya Pratiwi
                                        </p>
                                    </li>
                                    <li>
                                        <p><b>MANDIRI </b> : 1400021339495 a.n. Agun Widya Pratiwi
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama_pemilik_rekening" class="form-label">
                                    Nama Pemilik Rekening
                                </label>
                                <input type="text"
                                    class="form-control @error('nama_pemilik_rekening')
                                    is-invalid
                                @enderror"
                                    id="nama_pemilik_rekening" name="nama_pemilik_rekening"
                                    placeholder="Contoh : FAIZ RAHMADANI">
                                @error('nama_pemilik_rekening')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="bukti_pembayaran" class="form-label">
                                    Bukti Pembayaran
                                </label>
                                <input type="file"
                                    class="form-control  @error('bukti_pembayaran')
                                is-invalid
                            @enderror"
                                    id="bukti_pembayaran" name="bukti_pembayaran">
                                @error('bukti_pembayaran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="small">
                                    <label class="form-label mt-2 d-block">Format Penamaan :
                                        bukti_bayar_[nama]</label>
                                    <label class="form-label d-block">Format: .jpg, max. size 5 MB</label>
                                </div>
                            </div>
                        </div>
                        {{-- End of Pembayaran --}}
                        {{-- Checkbox accepting terms --}}
                        <div class="my-3 form-check">
                            <input class="form-check-input" type="checkbox" id="agreement">
                            <label class="form-check-label" for="agreement">
                                Saya menyatakan bahwa data/informasi/berkas yang saya sampaikan pada formulir ini adalah
                                benar
                            </label>
                        </div>
                        {{-- end of Checkbox accepting terms --}}
                        {{-- Submit Button --}}
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mt-4 epc-submit-button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
