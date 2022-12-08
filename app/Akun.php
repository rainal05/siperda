<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    // protected $guarded = [];
    protected $table = 'akuns';
    // protected $fillable = ['user_id', 'nama', 'username'];
    protected $fillable = ['user_id', 'nama', 'tgl', 'alamat', 'jk', 'hp', 'kec', 'kel', 'username'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
