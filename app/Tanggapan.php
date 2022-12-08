<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $guarded = [];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }
}
