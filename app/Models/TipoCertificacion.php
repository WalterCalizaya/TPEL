<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class TipoCertificacion extends Model
{
    use Sluggable;
    protected $table = 'tipo_certificacion';

    protected $guarded = [];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'tipo'
            ]
        ];
    }

    public function certificaciones(){
        return $this->hasMany('App\Models\Certificacion','tipo_certificacion_id');
    }
}
