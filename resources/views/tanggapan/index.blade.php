@extends('layouts.admin')

@section('content')
    <!-- batas 1 -->
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Data Pengaduan</h1>
                </div>
            </div>
        </div>
    </div>
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
    <!-- Table -->
    <div class="row">
        <div class="col-lg-12">
            {{-- Card --}}
            <div class=" shadow">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Tambah</li>
                    <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#exampleModal"> <i
                                class="fa fa-plus-circle" aria-hidden="true"></i></a></li>
                    {{-- <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#import">Import <i class="fa fa-file-excel" aria-hidden="true"></i></a></li> --}}
                </ol>
            </div>
            {{-- Card --}}
            <div class="card">
                <div class="user-profile">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="user-photo m-b-30">
                                <img class="img-fluid" style="width: 600px; height: auto;"
                                    src="{{ url('/file_foto/' . $dtl->foto) }}" alt="images" />
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="user-profile-name">{{ $dtl->tgl_adu }}</div>
                            <div class="custom-tab user-profile-tab">
                                <hr>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="1">
                                        <div class="contact-information">
                                            <div class="phone-content">
                                                {{-- <span class="contact-title">Uraian Kinerja :</span> --}}
                                                <span class="phone-number">

                                                    <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label" for="val-skill">Isi</label>
                                                        <div class="col-lg-6">
                                                            : {{ $dtl->isi }}
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
                                                <span class="phone-number">

                                                    @if ($cek < 1)
                                                        0
                                                    @else
                                                        1
                                                    @endif

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
    <!-- End Table -->
@endsection
