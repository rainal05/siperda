<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $guarded = [];

    public function tanggapan()
    {
        return $this->hasMany(Tanggapan::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
