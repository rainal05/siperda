<?php

namespace App\Http\Controllers;

use App\Akun;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $user = Akun::where('role', 'user')->get();
        $user = Akun::get();
        return view('akun.index', compact('user'));
    }

    public function detail($id)
    {
        $user = Akun::get()->where('id', $id)->first();
        return view('akun.detail', compact('user'));
    }

    public function delete($id)
    {
        $user = Akun::find($id);
        $user->delete();
        // $user = User::whereId($id)->first();
        // $user->akun()->delete();
        // $user->delete();
        return redirect('/akun')->with(['notif' => '</strong>' . $user->name . '</strong> Dihapus']);
    }
}
