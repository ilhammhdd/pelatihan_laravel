<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asisten extends Model
{
    public $fillable = [
        'id',
        'kode',
        'nim',
        'nama'
    ];

    public function jadwal()
    {
        return $this->belongsToMany('App\Jadwal', 'kehadirans', 'asisten_id', 'jadwal_id');
    }
}
