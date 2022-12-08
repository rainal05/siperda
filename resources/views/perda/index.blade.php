@extends('layouts.backend')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Data Perda</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Data Peraturan Daerah
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
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Nama</th>
                                    {{-- <th>Hak Akses</th> --}}
                                    {{-- <th width="8%">Pilihan</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perda as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama ?? '?' }}</td>
                                        {{-- <td nowrap align="right">
                                            <a href="/akun/detail/{{ $item->id }}" class="btn btn-success btn-sm">
                                                <i class="fa fa-search-plus"> </i>
                                            </a>
                                            <a href="/akun/{{ $item->id }}/delete" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Anda yakin ingin menghapus ?')">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- @endif --}}
                </div>
            </div>
        </div>
    </main>
@endsection
