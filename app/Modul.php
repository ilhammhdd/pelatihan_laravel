<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    public $fillable = [
        'id',
        'nama',
        'nomor',
        'praktikum_id'
    ];

    public function jadwal(){
        return $this->hasMany('App\Jadwal','modul_id','id');
    }

    public function praktikum()
    {
        return $this->belongsTo('App\Praktikum', 'praktikum_id', 'id');
    }
}
