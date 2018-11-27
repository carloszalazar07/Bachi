<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;

    protected $fillable = ['curso','orientacion','turno'];

    protected $dates = ['deleted_at'];

    public function materias()
    {
    	//relacion muchos a muchos
        return $this->belongsToMany('App\Materia');
    }

    public function alumnos()
    {
    	//relacion muchos a muchos
        return $this->belongsToMany('App\Alumno');
    }

    public function asistentes()
    {
        return $this->belongsToMany('App\Asistentes');
    }
}
