<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorium extends Model
{
    public $fillable = [
        'id',
        'nama'
    ];

    public function praktikum()
    {
        return $this->hasMany('App\Praktikum', 'lab_id', 'id');
    }
}
