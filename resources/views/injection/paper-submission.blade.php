@extends('layout.layout')
@section('content')
    <div class="bg-dashboard">
        <img src="{{ asset('img/bg-dashboard-batik.png') }}" class="dashboard-batik" alt="batik">
        @include('partials.navbar-dashboard')
        @if (auth()->user()->verified == 'true')
            <div class="body-dashboard">
                <div class="text-center submission-header">
                    <h1>Paper Submission</h1>
                </div>
                <section>
                    <form action="{{ route('submission-post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Upload File</label>
                                        <div class="preview-zone hidden">
                                            <div class="box box-solid">
                                                <div class="box-header with-border">
                                                    <div><b>Please upload your file here</b></div>
                                                    <div class="box-tools pull-right">
                                                        <button id="delete_button" onclick="deleteFile() this.form.reset()"
                                                            type="button" class="btn btn-danger btn-xs remove-preview">
                                                            <i class="fa fa-times"></i> Reset This Form
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="box-body"></div>
                                            </div>
                                        </div>
                                        <div class="dropzone-wrapper">
                                            <div class="dropzone-desc">
                                                <i class="glyphicon glyphicon-download-alt"></i>
                                                <p id="file_name_uploaded">Choose an image file or drag it here.</p>
                                            </div>
                                            <input type="file" name="submission_paper" class="dropzone"
                                                onchange="getFileData(this)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary pull-right">Upload</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <script src="{{ asset('js/uploadHandler.js') }}"></script>
        @endif
        @if (auth()->user()->verified == 'false')
            <div class="body-dashboard">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/injection-header.png') }}" width="400" alt="epc header">
                </div>
                <div class="text-center mt-5">
                    <div class="fs-2">Mohon maaf, data registrasi anda belum terverifikasi</div>
                    <div class="fs-3">Silahkan Hubungi CP INJECTION 2023 untuk info lebih lanjut</div>
                </div>
            </div>
        @endif
    </div>
@endsection
