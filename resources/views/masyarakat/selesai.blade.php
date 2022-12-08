@extends('layouts.backend')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Pengaduan Saya</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Pengaduan</li>
                <li class="breadcrumb-item">Proses</li>
                <li class="breadcrumb-item">Selesai</li>
                <li class="breadcrumb-item">Ditolak</li>
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
                        <h4>Belum Ada Pengaduan</h2>
                        @else
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th>Tanggal</th>
                                                <th>Laporan Kejadian</th>
                                                <th>Lokasi</th>
                                                <th>Status</th>
                                                <th width="8%">Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($saya as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->tgl_adu ?? 'Admin' }}</td>
                                                    <td>{{ $item->isi ?? 'Admin' }}</td>
                                                    <td><a href="{{ $item->maps }}"
                                                            target="_blank">{{ $item->maps }}</a>
                                                    <td><span class="badge badge-info">{{ $item->status ?? '-' }}</span>
                                                    </td>
                                                    <td nowrap align="right">
                                                        <a href="saya/detail{{ $item->id }}"
                                                            class="btn btn-info btn-sm">
                                                            <i class="fa fa-search-plus"> </i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
