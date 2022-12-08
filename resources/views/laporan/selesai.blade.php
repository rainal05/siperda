@extends('layouts.backend')

@section('content')
    @if (auth()->user()->role == 'admin')
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Pengaduan Selesai</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Laporan</li>
                    <li class="breadcrumb-item">Pengaduan Selesai</li>
                </ol>
                <!-- notif -->
                @if (\Session::has('notif'))
                    <div class="alert alert-primary" align="center">
                        {!! \Session::get('notif') !!}
                    </div>
                @endif
                <!-- notif -->
                <!-- error -->
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- end error -->
                {{-- Filter --}}
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Cetak Berdasarkan Filter</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-row mt-4">
                            <div class="col-4 col-sm-4">
                                <label>Jenis Pengaduan</label>
                                <select name="jenis" id="jenis" class="multisteps-form__select form-control">
                                    <option value="">-- PILIH --</option>
                                    <option value="Pungli">Pungli</option>
                                    <option value="PKL">PKL</option>
                                    <option value="Anjal">Anjal(Anak Jalanan)</option>
                                    <option value="Gepeng">Gepeng(Gelandangan & Pengemis)</option>
                                    <option value="Dll">Dll</option>
                                </select>
                            </div>
                            <div class="col-4 col-sm-4">
                                <label>Tanggal Awal </label>
                                <input class=" form-control" min="2022-01-01" name="awalkas" id="awalkas"
                                    type="date" />
                            </div>
                            <div class="col-4 col-sm-4">
                                <label>Tanggal Akhir</label>
                                <input class=" form-control" min="2022-01-01" name="akhirkas" id="akhirkas"
                                    type="date" />
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 10px">
                            <a href="#"
                                onclick="this.href='/laporan/selesai/'+document.getElementById('awalkas').value +
                                '/' + document.getElementById('akhirkas').value +
                                '/' + document.getElementById('jenis').value"
                                target="_blank" class="btn btn-primary">Cetak
                            </a>
                        </div>
                    </div>
                </div>
                {{-- End Filter --}}
                {{-- All --}}
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Cetak Keseluruhan Data</h6>
                    </div>
                    <div class="card-body">
                        {{-- Tanggal --}}
                        <div class="form-row mt-4">
                            <div class="col-6 col-sm-6">
                                <label>Tanggal Awal </label>
                                <input class=" form-control" min="2022-01-01" name="start" id="start"
                                    type="date" />
                            </div>
                            <div class="col-6 col-sm-6">
                                <label>Tanggal Akhir</label>
                                <input class=" form-control" min="2022-01-01" name="end" id="end"
                                    type="date" />
                            </div>
                        </div>
                        {{-- Tanggal --}}
                        <div class="input-group" style="margin-top: 10px">
                            <a href="#"
                                onclick="this.href='/laporan/selesai/'+document.getElementById('start').value +
                                '/' + document.getElementById('end').value"
                                target="_blank" class="btn btn-primary">Cetak
                            </a>
                        </div>
                    </div>
                </div>
                {{-- End All --}}
                {{-- Kecamatan --}}
                {{-- <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Cetak Berdasarkan Filter</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-row mt-4">
                            <div class="col-4 col-sm-4">
                                <label>Jenis Pengaduan</label>
                                <select name="kec" id="kec" class="multisteps-form__select form-control">
                                    <option value="">-- PILIH --</option>
                                    <option value="Kota Baru">Kota Baru</option>
                                    <option value="Alam Barajo">Alam Barajo</option>
                                    <option value="Jambi Selatan">Jambi Selatan</option>
                                    <option value="Paal Merah">Paal Merah</option>
                                    <option value="Jelutung">Jelutung</option>
                                    <option value="Pasar Jambi">Pasar Jambi</option>
                                    <option value="Talanaipura">Talanaipura</option>
                                    <option value="Danau Sipin">Danau Sipin</option>
                                    <option value="Pelayangan">Pelayangan</option>
                                    <option value="Jambi Timur">Jambi Timur</option>
                                </select>
                            </div>
                            <div class="col-4 col-sm-4">
                                <label>Tanggal Awal </label>
                                <input class=" form-control" min="2022-01-01" name="kecaw" id="kecaw"
                                    type="date" />
                            </div>
                            <div class="col-4 col-sm-4">
                                <label>Tanggal Akhir</label>
                                <input class=" form-control" min="2022-01-01" name="kecak" id="kecak"
                                    type="date" />
                            </div>
                        </div>
                        <div class="input-group" style="margin-top: 10px">
                            <a href="#"
                                onclick="this.href='/laporan/selesai/'+document.getElementById('kecaw').value +
                                '/' + document.getElementById('kecak').value +
                                '/' + document.getElementById('kec').value"
                                target="_blank" class="btn btn-primary">Cetak
                            </a>
                        </div>
                    </div>
                </div> --}}
                {{-- End Kecamatan --}}
            </div>
        </main>
    @endif


@endsection
