<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Alumno;
use App\Padre;
use App\Curso;
use App\Nota;
use App\Asistencia;
use App\Materia;
use PDF;

use Illuminate\Support\Facades\DB;

class AlumnosController extends Controller
{
    
    public function index(Request $request)
    {   
        $alumnos = Alumno::orderBy('apellido');

        return $alumnos->paginate(10);

    }

    public function buscar(Request $request){

        $alumnos = Alumno::where('cuil','like','%'.$request->busqueda.'%')->orWhere('apellido','like','%'.$request->busqueda.'%')->orWhere('nombre','like','%'.$request->busqueda.'%')->get();

        return view('alumnos.index', compact('alumnos'));

    }

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
        $alumno->barrio = $request->barrio;
        $alumno->departamento = $request->departamento;
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

        $alumno = Alumno::orderby('created_at','DESC')->take(1)->get();
        foreach ($alumno as $a) {
            $alumno_id = $a->id;
        }
        
        $padre = new Padre;
        $padre->alumno_id = $alumno_id;
        $padre->madre_padre = $request->get('madre_padre');
        $padre->cuil = $request->cuil_tutor;
        $padre->apellido = $request->apellido_tutor;
        $padre->nombre = $request->nombre_tutor;
        $padre->fecha_nacimiento = $request->fecha_nacimiento_tutor;
        $padre->lugar_nacimiento = $request->lugar_nacimiento_tutor;
        $padre->nacionalidad = $request->nacionalidad_tutor;
        $padre->direccion = $request->direccion_tutor;
        $padre->barrio = $request->barrio_tutor;
        $padre->departamento = $request->departamento_tutor;
        $padre->telefono = $request->telefono_tutor;
        $padre->a_cargo = $request->get('a_cargo');
        $padre->es_tutor = $request->get('es_tutor');
        $padre->patria_potestad = $request->get('patria_potestad');
        $padre->vive_con_alumno = $request->get('vive_con_alumno');
        $padre->ocupacion = $request->ocupacion;
        $padre->save();

        return $alumno_id;

        // $id = $request->get('curso');
        // $curso = Curso::find($id);
        // $anio = now()->format('Y');
        // $curso->alumnos()->attach($alumno_id,['anio'=>$anio]);
        
    }

    public function show($id)
    {
        $alumno = Alumno::find($id);
        $notas = Nota::where('alumno_id',$alumno->id)->get();
        $asistencias = Asistencia::where('alumno_id',$alumno->id)->orderBy('fecha')->get();
        $cantAsistencia = Asistencia::where('alumno_id',$alumno->id)->sum('asistencia');
        $totalAsistencia = Asistencia::where('alumno_id',$alumno->id)->count();
        $porcentaje = Asistencia::where('alumno_id',$alumno->id)->avg('asistencia')*100;
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
        $materias = $curso->materias()->get();
        
        return view('alumnos.show', compact('alumno', 'curso', 'anio', 'notas', 'materias', 'asistencias', 'cantAsistencia', 'totalAsistencia', 'porcentaje'));
    }

    public function update(Request $request, $id)
    {
        $alumno = Alumno::find($id);

        $alumno->cuil = $request->cuil;
        $alumno->apellido = $request->apellido;
        $alumno->nombre = $request->nombre;
        $alumno->fecha_nacimiento = $request->fecha_nacimiento;
        $alumno->lugar_nacimiento = $request->lugar_nacimiento;
        $alumno->nacionalidad = $request->nacionalidad;
        $alumno->direccion = $request->direccion;
        $alumno->barrio = $request->barrio;
        $alumno->departamento = $request->departamento;
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
    }

    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno = Alumno::find($id);
        $alumno->delete();
    }
}
