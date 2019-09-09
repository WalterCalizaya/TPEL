<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $fillable = [
        'nombres',
        'apellidos',
        'email',
        'password',
        'telefono',
        'tipo',
        'foto',
        'distrito_id',
        'confirmado',
        'confirmacion_code',
        'activo',
        'banneado',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function distrito(){
        return $this->belongsTo('App\Models\Distrito','distrito_id');
    }

    public function inscripciones(){
        return $this->hasMany('App\Models\Inscripcion','usuario_id');
    }

    public function evaluaciones(){
        return $this->hasMany('App\Models\Inscripcion','evaluado_por');
    }

    public function getNameAndSurnameAttribute()
    {
        return $this->nombres.' '.$this->apellidos;
    }
}
