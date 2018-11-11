<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    public $fillable=[
        'id',
        'nama'
    ];

    public function jadwal(){
        return $this->hasMany('App\Jadwal','ruangan_id','id');
    }
}
