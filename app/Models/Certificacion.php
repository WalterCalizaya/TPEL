<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Certificacion extends Model
{
    use Sluggable;
    protected $table = 'certificaciones';

    protected $guarded = [];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'certificacion'
            ]
        ];
    }

    public function tipocertificacion(){
        return $this->belongsTo('App\Models\TipoCertificacion','tipo_certificacion_id');
    }

    public function eventos(){
        return $this->hasMany('App\Models\Evento','certificacion_id');
    }
}
