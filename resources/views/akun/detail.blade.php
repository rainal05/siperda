@extends('layouts.backend')

@section('content')
    <main>
        <div class="container-fluid">
            <h4 class="mt-4">Detail Akun | {{ $user->user->name ?? '' }}</h4>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('/akun', []) }}"><i class="fa fa-arrow-circle-left"
                            aria-hidden="true"></i> Akun</a></li>

            </ol>
            @if (\Session::has('notif'))
                <div class="alert alert-primary" align="center">
                    {!! \Session::get('notif') !!}
                </div>
            @endif
            <div class="card mb-4">
                <div class="card-body">

                    <table class="table table-sm table-stripped">
                        <tbody>
                            <tr>
                                {{-- <td colspan="2">
                                    <h4 class="text-primary">{{ auth()->user()->name }}</h4>
                                </td> --}}
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Username</td>
                                <td>: {{ $user->username }}</td>
                            </tr>
                            {{-- <tr>
                                <td class="font-weight-bold">NIK</td>
                                <td>: {{ $user->nik }}</td>
                            </tr> --}}
                            <tr>
                                <td class="font-weight-bold">Tanggal Lahir</td>
                                <td>: {{ $user->tgl }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Jenis Kelamin</td>
                                <td>: {{ $user->jk }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">Alamat</td>
                                <td>: {{ $user->alamat }}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">No HP</td>
                                <td>: {{ $user->hp }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </main>
@endsection
