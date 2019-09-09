<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Temario extends Model
{
    use Sluggable;
    protected $table = 'temarios';

    protected $guarded = [];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

    public function eventos(){
        return $this->hasMany('App\Models\Evento','temario_id');
    }
}
