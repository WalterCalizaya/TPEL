<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';

    protected $guarded = [];

    public function distritos(){
        return $this->hasMany('App\Models\Distrito','provincia_id');
    }

    public function region(){
        return $this->belongsTo('App\Models\Region','region_id');
    }
}
