<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';

    protected $guarded = [];

    public function detalles(){
        return $this->hasMany('App\Models\DetalleInscripcion','inscripcion_id')->with('ciclo');
    }

    public function usuario(){
        return $this->belongsTo('App\User','usuario_id');
    }

    public function mediopago(){
        return $this->belongsTo('App\Models\Banco','banco');
    }

    public function evaluado(){
        return $this->belongsTo('App\User','evaluado_por');
    }

    //accesor
    public function concatenar($numero)
    {
        $n=strlen($numero);
        if ($n==1) {
            $a='0000'.$numero;
        }
        else if ($n==2) {
            $a='000'.$numero;
        }
        else if ($n==3) {
            $a='00'.$numero;
        }
        else if ($n==4) {
            $a='0'.$numero;
        }
        else{
            $a=$numero;
        }
        return $a;
    }

    public function getYearAndNumberAttribute()
    {
        return $this->anio.'-'.$this->concatenar($this->numero);
    }
}
