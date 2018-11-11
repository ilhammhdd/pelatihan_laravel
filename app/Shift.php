<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    public $fillable = [
        'id',
        'nama',
        'range'
    ];

    public function jadwal()
    {
        return $this->hasMany('App\Jadwal', 'shift_id', 'id');
    }
}
