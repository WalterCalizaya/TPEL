<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Evento extends Model
{
    use Sluggable;
    protected $table = 'eventos';

    protected $guarded = [];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

    public function certificacion(){
        return $this->belongsTo('App\Models\Certificacion','certificacion_id');
    }

    public function distrito(){
        return $this->belongsTo('App\Models\Distrito','distrito_id');
    }

    public function instructor(){
        return $this->belongsTo('App\Models\Instructor','instructor_id');
    }

    public function temario(){
        return $this->belongsTo('App\Models\Temario','temario_id');
    }

    // public function detalles(){
    //     return $this->belongsTo('App\Models\DetalleInscripcion','evento_id');
    // }

}
