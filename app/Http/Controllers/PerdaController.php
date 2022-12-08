<?php

namespace App\Http\Controllers;

use App\Perda;
use Illuminate\Http\Request;

class PerdaController extends Controller
{
    public function index()
    {
        $perda = Perda::get();
        return view('perda.index',compact('perda'));
    }
}
