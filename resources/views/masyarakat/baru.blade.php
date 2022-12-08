@extends('layouts.backend')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Pengaduan Baru</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><a href="#" data-toggle="modal" data-target="#exampleModal">
                        Tambah </a>
                </li>
                <li class="breadcrumb-item"><a href="#" data-toggle="modal" data-target="#exampleModal"> <i
                            class="fa fa-plus-circle" aria-hidden="true"></i></a>
                </li>
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
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Tanggal</th>
                                            <th>Laporan Kejadian</th>
                                            <th width="15%">Foto</th>
                                            <th>Status</th>
                                            <th width="8%">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($saya as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->tgl_adu ?? 'Admin' }}</td>
                                                <td>{{ $item->isi }}</td>
                                                <td>
                                                    <img width="150px" height="100px"
                                                        src="{{ url('/file_foto/' . $item->foto) }}">
                                                </td>
                                                <td><span class="badge badge-info">{{ $item->status }}</span></td>
                                                <td nowrap align="right">
                                                    <a href="baru/detail{{ $item->id }}" class="btn btn-info btn-sm">
                                                        <i class="fa fa-search-plus"> </i>
                                                    </a>
                                                    {{-- <a href="/users/{{ $item->id }}/delete"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Anda yakin ingin menghapus ?')">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a> --}}
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
    <!-- Modal tambah -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pengaduan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ url('/pengaduan/store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-row">
                            <div class="col-6 col-sm-6">
                                <label><b>Tanggal</b></label>
                                <input type="date" class="form-control" name="tgl_adu" placeholder="Nama Anggota">
                            </div>
                            <div class="col-6 col-sm-6">
                                <label for="inputEmailAddress"><b>Jenis Kejadian</b></label>
                                <select name="jenis" class="multisteps-form__select form-control">
                                    <option value="">-- PILIH --</option>
                                    <option value="Pungli">Pungli</option>
                                    <option value="PKL">PKL</option>
                                    <option value="Anjal">Anjal(Anak Jalanan)</option>
                                    <option value="Gepeng">Gepeng(Gelandangan & Pengemis)</option>
                                    <option value="Dll">Dll</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-6 col-sm-6">
                                <label><b>Kecamatan</b></label>
                                <select name="kec" class="multisteps-form__select form-control">
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
                            <div class="col-6 col-sm-6">
                                <label for="inputEmailAddress"><b>Kelurahan</b></label>
                                <select name="kel" class="multisteps-form__select form-control">
                                    <option value="">-- PILIH --</option>
                                    <option value="Bagan Pete">Bagan Pete</option>
                                    <option value="Beliung">Beliung</option>
                                    <option value="Mayang Mangurai">Mayang Mangurai</option>
                                    <option value="Rawasari">Rawasari</option>
                                    <option value="Legok">Legok</option>
                                    <option value="Solok Sipin">Solok Sipin</option>
                                    <option value="Olak Kemang">Olak Kemang</option>
                                    <option value="Sungai Putri">Sungai Putri</option>
                                    <option value="Olak Kemang">Olak Kemang</option>
                                    <option value="Tanjung Pasir">Tanjung Pasir</option>
                                    <option value="Tanjung Raden">Tanjung Raden</option>
                                    <option value="Ulu Gedong">Ulu Gedong</option>
                                    <option value="Pakuan Baru">Pakuan Baru</option>
                                    <option value="Pasir Putih">Pasir Putih</option>
                                    <option value="Budiman">Budiman</option>
                                    <option value="Kenali Asam Atas">Kenali Asam Atas</option>
                                    <option value="Cempaka Putih">Cempaka Putih</option>
                                    <option value="Kenali Asam Bawah">Kenali Asam Bawah</option>
                                    <option value="Beringin">Beringin</option>
                                    <option value="Telanaipura">Telanaipura</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label><b>Lokasi Kejadian</b></label>
                            <input type="text" class="form-control" name="alamat" placeholder="Lokasi Kejadian">
                        </div>
                        <div class="form-group mt-3">
                            <label><b>Titik Link Maps</b></label>
                            <input type="text" class="form-control" name="maps"
                                placeholder="Link Lokasi Kejadian">
                        </div>
                        <div class="form-row">
                            <div class="col-6 col-sm-6">
                                <label><b>Foto</b></label>
                                <input type="file" class="form-control" name="foto">
                            </div>
                            <div class="col-6 col-sm-6">
                                <label><b>Foto</b> <i>(Optional)</i></label>
                                <input type="file" class="form-control" placeholder="No Register Anggota">
                            </div>
                        </div>
                        <div class="form-group">
                            <label><b>Laporan Kejadian</b></label>
                            <textarea class="form-control" name="isi" id="" cols="30" rows="3"></textarea>
                            {{-- <input type="text" class="form-control" name="jabatan" placeholder="Jabatan Anggota"> --}}
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-0">
                            <input type="submit" class="btn btn-primary" value="Simpan">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal tambah -->
@endsection
