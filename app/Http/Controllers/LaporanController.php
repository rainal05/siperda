<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Pengaduan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function tolak()
    {
        return view('laporan.tolak');
    }

    public function tolakpdf($awalkas, $akhirkas, $jenis)
    {
        $tgl['now']     = Carbon::now()->format('d - m - Y');
        $tolak = Pengaduan::where('status', 'Ditolak')
            ->whereBetween('tgl_adu', [$awalkas, $akhirkas])
            ->where('jenis', [$jenis])
            ->get();
        return view('laporan.tolak-pdf', compact('tolak', 'tgl'));
    }

    public function tolakall($start, $end)
    {
        $tgl['now']     = Carbon::now()->format('d - m - Y');
        $all = Pengaduan::where('status', 'Ditolak')
            ->whereBetween('tgl_adu', [$start, $end])
            // ->where('jenis', [$jenis])
            ->get();
        return view('laporan.tolak-all', compact('all', 'tgl'));
    }

    public function selesai()
    {
        return view('laporan.selesai');
    }

    public function selesaipdf($awalkas, $akhirkas, $jenis)
    {
        $tgl['now']     = Carbon::now()->format('d - m - Y');
        $selesai = Pengaduan::where('status', 'Selesai')
            ->whereBetween('tgl_adu', [$awalkas, $akhirkas])
            ->where('jenis', [$jenis])
            ->get();
        return view('laporan.selesai-pdf', compact('selesai', 'tgl'));
    }

    public function selesaiall($start, $end)
    {
        $tgl['now']     = Carbon::now()->format('d - m - Y');
        $all = Pengaduan::where('status', 'Selesai')
            ->whereBetween('tgl_adu', [$start, $end])
            // ->where('jenis', [$jenis])
            ->get();
        return view('laporan.selesai-all', compact('all', 'tgl'));
    }

    public function kec($kecaw, $kecak, $kec)
    {
        $tgl['now']     = Carbon::now()->format('d - m - Y');
        $selesai = Pengaduan::where('status', 'Selesai')
            ->whereBetween('tgl_adu', [$kecaw, $kecak])
            ->where('kec', [$kec])
            ->get();
        return view('laporan.kec-pdf', compact('selesai', 'tgl'));
    }

    public function grafik()
    {
        //SELURUH YG DAFTAR
        $all = Pengaduan::all()->count();
        $kobar = Pengaduan::where('kec', 'Kota Baru')->count();
        $albar = Pengaduan::where('kec', 'Alam Barajo')->count();
        $jamsel = Pengaduan::where('kec', 'Jambi Selatan')->count();
        $pamer = Pengaduan::where('kec', 'Paal Merah')->count();
        $jel = Pengaduan::where('kec', 'Jelutung')->count();
        $pasar = Pengaduan::where('kec', 'Pasar Jambi')->count();
        $tl = Pengaduan::where('kec', 'Talanaipura')->count();
        $dansip = Pengaduan::where('kec', 'Danau Sipin')->count();
        $pel = Pengaduan::where('kec', 'Pelayangan')->count();
        $jatim = Pengaduan::where('kec', 'Jambi Timur')->count();
        return view('laporan.grafik', compact('all', 'kobar', 'albar', 'jamsel', 'pamer', 'jel', 'pasar', 'tl', 'dansip', 'pel', 'jatim'));
    }
}
