<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Curso;

use App\Materia;

use App\Alumno;

use App\Docente;


class InicioController extends Controller
{

    public function index()
    {
        $cursos = Curso::orderBy('curso')->get();
        $alumnos = Alumno::orderBy('apellido')->get();
        $docentes = Docente::orderBy('apellido')->get();
        $materias = Materia::orderBy('nombre')->get();
        $alumnocurso = DB::table('alumno_curso')->get();
        $cursomateria = DB::table('curso_materia')->get();
        $docentemateria = DB::table('docente_materia')->get();
        $num = count($cursos);
        return view('welcome', ['alumnocurso' => $alumnocurso, 'cursos' => $cursos, 'num' => $num, 'alumnos' => $alumnos, 'cursomateria' => $cursomateria, 'docentemateria' => $docentemateria, 'docentes' => $docentes, 'materias' => $materias]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function show(Inicio $inicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Inicio $inicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inicio $inicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inicio  $inicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inicio $inicio)
    {
        //
    }
}
