<?php

namespace App\Http\Controllers;

use File;
use App\Pengaduan;
use App\Tanggapan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    // user
    public function baru()
    {
        $cek = Pengaduan::where('user_id', \Auth::user()->id)->count();
        $saya = Pengaduan::where('status', 'Menunggu Tanggapan')->orderBy('created_at', 'DESC')->where('user_id', \Auth::user()->id)->get();
        return view('masyarakat.baru', compact('saya', 'cek'));
    }

    // $cek = Pengaduan::where('status', 'Selesai')->count();
    //     $selesai = Pengaduan::where('status', 'Selesai')->get();
    // user
    public function syselesai()
    {
        // whereIn('ket', array('Lunas', 'BB'))
        $cek = Tanggapan::where('user_id', \Auth::user()->id)->count();
        $saya = Pengaduan::whereIn('status', array('Diproses', 'Selesai', 'Ditolak'))->orderBy('created_at', 'DESC')->where('user_id', \Auth::user()->id)->get();
        return view('masyarakat.selesai', compact('saya', 'cek'));
    }

    public function dtl($id)
    {
        $dtl = Pengaduan::find($id);
        return view('masyarakat.baru-detail', compact('dtl'));
    }
    public function sydtl($id)
    {
        $sydtl = Pengaduan::with(['tanggapan'])->find($id);
        return view('masyarakat.selesai-detail', compact('sydtl'));
    }
    // end user

    public function store(Request $request)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];
        $this->validate($request, [
            'tgl_adu' => 'required',
            'isi' => 'required',
            'kec' => 'required',
            'kel' => 'required',
            'alamat' => 'required',
            'maps' => 'required',
            'foto' => 'required',
            'jenis' => 'required',
        ], $massage);
        $foto = $request->file('foto');
        $nama_file = time() . "_" . $foto->getClientOriginalName();
        $tujuan_upload = 'file_foto';
        $foto->move($tujuan_upload, $nama_file);
        $up = Pengaduan::create([
            'foto' => $nama_file,
            'user_id' => $request->user_id,
            'tgl_adu' => $request->tgl_adu,
            'isi' => $request->isi,
            'kec' => $request->kec,
            'kel' => $request->kel,
            'alamat' => $request->alamat,
            'maps' => $request->maps,
            'status' => 'Menunggu Tanggapan',
            'jenis' => $request->jenis,

        ]);

        // $tanggap = new \App\Tanggapan;
        // $tanggap->user_id = $request->user_id;
        // $tanggap->pengaduan_id = $request->up;
        // $tanggap->save();

        return redirect()->back()->with('notif', 'pengaduan Ditambah');
    }

    public function edit($id)
    {
        $edit = Pengaduan::find($id);
        return view('pengaduan.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        // UPDATE STATUS DB PENGADUAN
        // $massage = [
        //     'required' => ':attribute  wajib di isi !!',
        // ];

        // $this->validate($request, [
        //     'name' => 'required',
        //     'username' => 'required|unique:users,username',
        // ], $massage);
        $edit = \App\Pengaduan::find($id);
        $edit->status = $request->status;
        $edit->waktu = $request->waktu;
        $edit->save();

        // INSERT DB TANGGAPAN
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'isi' => 'required',
        ], $massage);
        $up = new \App\Tanggapan;
        $up->user_id = $request->user_id;
        $up->pengaduan_id = $request->pengaduan_id;
        $up->tgl_adu = $request->tgl_adu;
        $up->isi = $request->isi;
        $up->isi_adu = $request->isi_adu;
        $up->status = $request->status;
        $up->foto = $request->foto;
        $up->waktu = $request->waktu;
        $up->save();

        return redirect('pengaduan/masuk')->with(['notif' => 'Status Telah <strong>' . $edit->status . '</strong>']);
    }

    public function masuk()
    {
        $cek = Pengaduan::where('status', 'Menunggu Tanggapan')->count();
        $masuk = Pengaduan::where('status', 'Menunggu Tanggapan')->get();
        return view('pengaduan.masuk', compact('masuk', 'cek'));
    }

    public function proses()
    {
        $cek = Pengaduan::where('status', 'Diproses')->count();
        $proses = Pengaduan::where('status', 'Diproses')->get();
        return view('pengaduan.proses', compact('proses', 'cek'));
    }

    public function tolak()
    {
        $cek = Pengaduan::where('status', 'Ditolak')->count();
        $tolak = Pengaduan::where('status', 'Ditolak')->get();
        return view('pengaduan.tolak', compact('tolak', 'cek'));
    }

    public function haptol($id)
    {
        // hapus file
        $keluar = Pengaduan::where('id', $id)->first();
        File::delete('file_foto/' . $keluar->file);

        // hapus data
        Pengaduan::where('id', $id)->delete();

        return redirect()->back()->with('notif', 'Data Berhasil Dihapus');
    }

    // admin
    public function selesai()
    {
        $cek = Pengaduan::where('status', 'Selesai')->count();
        $selesai = Pengaduan::where('status', 'Selesai')->get();
        return view('pengaduan.selesai', compact('selesai', 'cek'));
    }

    public function status($id)
    {
        $detail = Pengaduan::find($id);
        $detail->status = "Selesai";
        $detail->save();
        return back()->with('notif', 'Pengaduan Telah Selesai');
    }

    public function tgp(Request $request)
    {
        Tanggapan::create([
            'pengaduan_id' => $request->pengaduan_id,
            'isi' => $request->isi,
        ]);
        return redirect()->back()->with('notif', 'pengaduan Ditambah');
    }
}
