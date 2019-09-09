<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Instructor extends Model
{
    use Sluggable;
    protected $table = 'instructores';

    protected $guarded = [];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'nombre'
            ]
        ];
    }

    public function eventos(){
        return $this->hasMany('App\Models\Evento','instructor_id');
    }
}
