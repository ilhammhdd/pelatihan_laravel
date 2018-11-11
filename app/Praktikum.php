<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praktikum extends Model
{

    public $fillable = [
        'id',
        'kode',
        'nama',
        'lab_id'
    ];

    public function modul()
    {
        return $this->hasMany('App\Modul', 'praktikum_id', 'id');
    }

    public function laboratorium()
    {
        return $this->belongsTo('App\Laboratorium', 'lab_id', 'id');
    }
}
