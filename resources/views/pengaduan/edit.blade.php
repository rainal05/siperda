@extends('layouts.backend')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Proses Pengaduan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/pengaduan/masuk', []) }}"><i class="fa fa-arrow-circle-left"
                            aria-hidden="true"></i> Pengaduan Masuk</a>
                </li>
                {{-- <li class="breadcrumb-item active">Edit</li> --}}
            </ol>
            <!-- End batas 1 -->
            @if (\Session::has('notif'))
                <div class="alert alert-dark" align="center">
                    {!! \Session::get('notif') !!}
                </div>
            @endif
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
            <div class="card mb-4">
                <div class="card-body">
                    <div class="user-profile">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="user-photo m-b-30">
                                    <img class="img-fluid" style="width: 600px; height: auto;"
                                        src="{{ url('/file_foto/' . $edit->foto) }}" alt="images" />
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="user-profile-name">{{ $edit->tgl_adu }}</div>
                                <div class="custom-tab user-profile-tab">
                                    <hr>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="1">
                                            <div class="contact-information">
                                                <div class="phone-content">
                                                    {{-- <span class="contact-title">Uraian Kinerja :</span> --}}
                                                    <span class="phone-number">

                                                        <div class="form-group row">
                                                            <label class="col-lg-4 col-form-label" for="val-skill">Laporan
                                                                Kejadian</label>
                                                            <div class="col-lg-6">
                                                                : {{ $edit->isi }}
                                                            </div>
                                                        </div>

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="1">
                                            <div class="contact-information">
                                                <div class="phone-content">
                                                    {{-- <span class="contact-title">Status :</span> --}}
                                                    <span class="phone-number">

                                                        <form action="/pengaduan/{{ $edit->id }}/update" method="POST"
                                                            enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="user_id"
                                                                value="{{ $edit->user_id }}">
                                                            <input type="hidden" name="pengaduan_id"
                                                                value="{{ $edit->id }}">
                                                            <input type="hidden" name="tgl_adu"
                                                                value="{{ $edit->tgl_adu }}">
                                                            <input type="hidden" name="isi_adu"
                                                                value="{{ $edit->isi }}">
                                                            <input type="hidden" name="foto"
                                                                value="{{ $edit->foto }}">
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="val-skill">Status<span
                                                                        class="text-danger">*</span></label>
                                                                <div class="col-lg-6">
                                                                    <select name="status" class="form-control"
                                                                        id="val-skill" name="val-skill">
                                                                        <option value="Diproses"
                                                                            @if ($edit->status == 'Diproses') selected @endif>
                                                                            Diproses</option>
                                                                        <option value="Ditolak"
                                                                            @if ($edit->status == 'Ditolak') selected @endif>
                                                                            Ditolak</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label" for="val-skill">Waktu
                                                                    Proses
                                                                    <span class="text-danger">*</span></label>
                                                                <div class="col-lg-6">
                                                                    <input type="number" name="waktu"
                                                                        class="form-control" id="val-skill" name="val-skill"
                                                                        placeholder="Waktu Proses (Dalam Jam)"
                                                                        value="{{ $edit->waktu }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-4 col-form-label"
                                                                    for="val-skill">Tanggapan
                                                                    <span class="text-danger">*</span></label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" name="isi"
                                                                        class="form-control" id="val-skill" name="val-skill"
                                                                        placeholder="Belum Ada Tanggapan !!!">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between mb-0">
                                                                <input type="submit" class="btn btn-primary"
                                                                    value="Simpan">
                                                            </div>
                                                        </form>

                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
