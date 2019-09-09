<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $table = 'medios_de_pago';
    protected $guarded = [];

    public function inscripciones(){
        return $this->hasMany('App\Models\Inscripcion','banco');
    }

    //accesor
    public function getBankAndAccAttribute()
    {
        return $this->banco.' - '.$this->nro_cuenta;
    }
}
