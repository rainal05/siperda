@extends('layouts.backend')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Detail Pengaduan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/pengaduan/baru', []) }}"><i class="fa fa-arrow-circle-left"
                            aria-hidden="true"></i> Kembali</a>
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
                                        src="{{ url('/file_foto/' . $dtl->foto) }}" alt="images" />
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="user-profile-name">Tanggal : {{ $dtl->tgl_adu }}</div>
                                <div class="custom-tab user-profile-tab">
                                    <hr>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="1">
                                            <div class="contact-information">
                                                <div class="phone-content">
                                                    <span class="contact-title">Isi Pengaduan :</span>
                                                    <span class="phone-number">{{ $dtl->isi }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="1">
                                            <div class="contact-information">
                                                <div class="phone-content">
                                                    <span class="contact-title">Status :</span>
                                                    <span class="phone-number"><span
                                                            class="badge badge-info">{{ $dtl->status }}</span></span>
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
