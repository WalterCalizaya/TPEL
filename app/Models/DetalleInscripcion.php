<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleInscripcion extends Model
{
    protected $table = 'detalle_inscripciones';

    protected $guarded = [];

    public function inscripcion(){
        return $this->belongsTo('App\Models\Inscripcion','inscripcion_id');
    }

    public function evento(){
        return $this->belongsTo('App\Models\Evento','evento_id');
    }
}
