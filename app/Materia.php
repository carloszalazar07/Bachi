<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['nombre'];

    public function cursos()
    {
    	//relacion muchos a muchos
        return $this->belongsToMany('App\Curso');
    }

    public function docente()
    {
    	//relacion uno a uno
        return $this->belongsTo('App\Docente');
    }
}
