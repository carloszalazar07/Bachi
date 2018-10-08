<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Alumno;

use App\Padre;

use App\Curso;

use App\Nota;

use App\Asistencia;

use App\Materia;

use Illuminate\Support\Facades\DB;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $alumnos = Alumno::orderBy('apellido')->get();

        return view('alumnos.index',compact('alumnos'));
    }

    public function buscar(Request $request){

        $alumnos = Alumno::where('cuil','like','%'.$request->busqueda.'%')->orWhere('apellido','like','%'.$request->busqueda.'%')->orWhere('nombre','like','%'.$request->busqueda.'%')->get();

        return view('alumnos.index', compact('alumnos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new Alumno;

        $alumno->cuil = $request->cuil;
        $alumno->apellido = $request->apellido;
        $alumno->nombre = $request->nombre;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->lugar_nacimiento = $request->lugar_nacimiento;
        $alumno->nacionalidad = $request->nacionalidad;
        $alumno->direccion = $request->direccion;
        $alumno->telefono = $request->telefono;
        $alumno->email = $request->email;
        $alumno->asignacion_universal = $request->get('asignacion_universal');
        $alumno->salario_familiar = $request->get('salario_familiar');
        $alumno->pueblo_originario = $request->get('pueblo_originario');
        $alumno->programa_cai = $request->get('programa_cai');
        $alumno->discapacidad = $request->get('discapacidad');
        $alumno->diabetes = $request->get('diabetes');
        $alumno->hernias = $request->get('hernias');
        $alumno->convulsiones = $request->get('convulsiones');
        $alumno->problemas_respiratorios = $request->get('problemas_respiratorios');
        $alumno->problemas_cardiacos = $request->get('problemas_cardiacos');
        $alumno->alergias = $request->get('alergias');
        $alumno->esguinces = $request->get('esguinces');
        $alumno->enfermedades_infectocontagiosas = $request->get('enfermedades_infectocontagiosas');
        $alumno->incapacidad = $request->get('incapacidad');
        $alumno->otros = $request->otros;
        $alumno->certificado_salud = $request->get('certificado_salud');
        $alumno->certificado_dental = $request->get('certificado_dental');
        $alumno->carnet_vacuna = $request->get('carnet_vacuna');
        $alumno->grupo_sanguineo = $request->get('grupo_sanguineo');
        $alumno->certificado_nivel_inicial = $request->get('certificado_nivel_inicial');
        $alumno->fotocopia_dni = $request->get('fotocopia_dni');
        $alumno->contribucion_cooperadora = $request->get('contribucion_cooperadora');

        $alumno->save();

        return redirect('alumnos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);

        $notas = Nota::where('alumno_id',$alumno->id)->get();

        $asistencias = Asistencia::where('alumno_id',$alumno->id)->get();

        //año actual
        $hoy = now()->format('Y');

        //devuelve el año de la tabla intermedia alumno_curso
        $anio = $alumno->cursos()->select('anio')->where('anio', $hoy)->value('anio');

        //recupera el id del curso de la tabla intermedia alumno_curso
        $idcurso = $alumno->cursos()->select('curso_id')->where('anio', $hoy)->value('curso_id');
        if ($idcurso>0) {
            //busca el curso a partir del id recuperado
            $curso = Curso::find($idcurso);

        } else {
            $curso = $idcurso;
        }

        $materias = Materia::doesntHave('cursos')->orderBy('nombre')->get();
        
        return view('alumnos.show', compact('alumno', 'curso', 'anio', 'notas', 'materias', 'asistencias'));
    }

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