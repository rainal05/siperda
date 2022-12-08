<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //SELURUH YG DAFTAR
        $all = Pengaduan::all()->count();
        //DATA DITERIMA DAFTAR
        $pungli = Pengaduan::where('jenis', 'Pungli')->count();
        //BATAL MASUK
        $pkl = Pengaduan::where('jenis', 'PKL')->count();
        //Bayar
        $anjal = Pengaduan::where('jenis', 'Anjal')->count();
        //BELUM Bayar
        $gepeng = Pengaduan::where('jenis', 'Gepeng')->count();
        $dll = Pengaduan::where('jenis', 'Dll')->count();
        return view('home', compact('all', 'pungli', 'pkl', 'anjal', 'gepeng', 'dll'));
    }
}
