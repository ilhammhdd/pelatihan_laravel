<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    public $fillable = [
        'id',
        'shift_id',
        'ruangan_id',
        'modul_id'
    ];

    public function asisten()
    {
        return $this->belongsToMany('App\Asisten', 'kehadirans', 'jadwal_id', 'asisten_id');
    }

    public function modul()
    {
        return $this->belongsTo('App\Modul', 'modul_id', 'id');
    }

    public function shift()
    {
        return $this->belongsTo('App\Shift', 'shift_id', 'id');
    }

    public function ruangan()
    {
        return $this->belongsTo('App\Ruangan', 'ruangan_id', 'id');
    }
}
