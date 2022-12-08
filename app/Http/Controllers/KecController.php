<?php

namespace App\Http\Controllers;

use App\Kecamatan;
use Illuminate\Http\Request;

class KecController extends Controller
{
    public function index()
    {
        $kec = Kecamatan::get();
        return view('kec.index', compact('kec'));
    }
}
