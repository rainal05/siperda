@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('daftar-akun/store') }}">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">NIK</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nik">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">TGL LAHIR</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="tgl">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">ALAMAT</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">PEKERJAAN</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="kerja">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">JK</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="jk">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">HP</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="hp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">EMAIL</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">USERNAME</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">PASSWORD</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
