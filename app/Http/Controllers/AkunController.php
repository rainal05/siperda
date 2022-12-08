<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function store(Request $request)
    {
        $massage = [
            'required' => ':attribute  wajib di isi !!',
        ];

        $this->validate($request, [
            'nama' => 'required|min:4',
            'tgl' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'hp' => 'required',
            'kec' => 'required',
            'kel' => 'required',
            'username' => 'required',
            'password' => 'required|min:4|max:12',
        ], $massage);

        $user = new \App\User;
        $user->role = 'user';
        $user->username = $request->username;
        $user->name = $request->nama;
        // $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $daftar = \App\Akun::create($request->all());
        return back()->with('notif', 'Anda Telah Registrasi, Silahkan Login');
    }
}
