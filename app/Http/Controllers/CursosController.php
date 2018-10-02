<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Curso;

use App\Materia;

use App\Alumno;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::orderBy('curso')->get();

        return view('cursos.index',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curso;

        $curso->curso = $request->curso;
        $curso->orientacion = $request->orientacion;
        $curso->turno = $request->turno;

        $curso->save();

        return redirect('cursos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anio = now()->format('Y');

        $curso = Curso::find($id);

        $materias = $curso->materias()->orderBy('nombre')->get();

        //recupera los alumnos de la tabla intermedia donde el año coincide con el actual
        $alumnos = $curso->alumnos()->orderBy('apellido')->where('anio', $anio)->get();

        //recupera las materias que no existen en la tabla intermedia
        $agregarMaterias = Materia::doesntHave('cursos')->orderBy('nombre')->get();

        //recupera los alumnos que no existen en la tabla intermedia
        $agregarAlumnos = Alumno::doesntHave('cursos')->orderBy('nombre')->get();

        $hoy = today()->format('d-m-Y');

        return view('cursos.show', compact('curso', 'materias', 'alumnos', 'agregarMaterias', 'agregarAlumnos', 'hoy'));
    }

    // public function agregarMateria($id){
        
    //     $curso->materias()->attach($id);

    //     return redirect('/cursos');
    // }

    // public function agregarAlumno($id){

    //     $anio = now()->format('Y');
        
    //     $curso->alumnos()->attach($id,['anio'=>$anio]);

    //     return redirect('/cursos');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
