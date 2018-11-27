<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistente extends Model
{
    protected $fillable = ['cuil','apellido','nombre','matricula','titulo','direccion','telefono','email'];

    public function cursos()
    {
        return $this->belongsToMany('App\Cursos');
    }
}
