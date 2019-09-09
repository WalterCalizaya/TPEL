<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regiones';

    protected $guarded = [];

    public function provincias(){
        return $this->hasMany('App\Models\Provincia','region_id');
    }
}
