@extends('layouts.backend')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Pengaduan Diproses</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Pengaduan Diproses
                </li>
                <!-- <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#exampleModal"> <i
                                            class="fa fa-plus-circle" aria-hidden="true"></i></a>
                                </li> -->
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
            <div class="card mb-4">
                <div class="card-body">
                    @if ($cek < 1)
                        <h4>Belum Ada Pengaduan Diproses</h2>
                        @else
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Pelapor</th>
                                            <th>Tanggal</th>
                                            <th>Laporan Kejadian</th>
                                            <th>Lokasi</th>
                                            <th>Foto</th>
                                            <th>Status</th>
                                            <th width="8%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proses as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->user->name ?? '-' }}</td>
                                                <td>{{ $item->tgl_adu ?? 'Admin' }}</td>
                                                <td>{{ $item->isi }}</td>
                                                <td><a href="{{ $item->maps }}" target="_blank">{{ $item->maps }}</a>
                                                <td>
                                                    <img width="150px" height="100px"
                                                        src="{{ url('/file_foto/' . $item->foto) }}">
                                                </td>
                                                <td><span class="badge badge-info">{{ $item->status }}</span></td>
                                                <td nowrap align="center">
                                                    <a onclick="return confirm('Pengaduan Telah Selesai')"
                                                        class="btn btn-sm btn-success"
                                                        href="{{ url('pengaduan/status/' . $item->id, []) }}">
                                                        Selesai <i class="fa fa-check"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
