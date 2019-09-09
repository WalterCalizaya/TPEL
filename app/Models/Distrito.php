<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = 'distritos';

    protected $guarded = [];

    public function provincia(){
        return $this->belongsTo('App\Models\Provincia','provincia_id');
    }

    public function eventos(){
        return $this->hasMany('App\Models\Evento','distrito_id');
    }

    public function usuarios(){
        return $this->hasMany('App\User','distrito_id');
    }
}
