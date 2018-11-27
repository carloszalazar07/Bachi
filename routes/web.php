<?php

use App\Alumno;
use App\Padre;

//Ruta Principal
Route::get('/', function () {
    return redirect()->action('InicioController@index');
});
//------------------------------------------------------------

//Rutas Vue

Route::get('alumnado', function () {
    return view('alumnos/index');
});

Route::get('matricula', function () {
    return view('materias/index');
});

Route::get('cursado', function () {
    return view('cursos/index');
});

Route::get('administracion', function () {
    return view('docentes/index');
});

//-------------------------------------------------------------

//Rutas Controlador

Route::resource('alumnos', 'AlumnosController');

Route::resource('asistentes', 'AsistentesController');

Route::resource('materias', 'MateriasController');

Route::resource('cursos', 'CursosController');

Route::resource('materias', 'MateriasController');

Route::resource('docentes', 'DocentesController');

Route::resource('padres', 'PadresController');


//--------------------------------------------------------------------------------

// Rutas Buscar

Route::post('buscarDocente','DocentesController@buscar')->name('docentes.buscar');

Route::post('buscarMateria','MateriasController@buscar')->name('materias.buscar');

//---------------------------------------------------------------------------------


Route::view('verMateria', 'materias.verMateria');

Route::view('verDocente', 'docentes.verDocente');




Route::resource('asistencias', 'AsistenciasController');

Route::resource('notas', 'NotasController');

Route::resource('inicio', 'InicioController');

// Rutas PDF 

Route::get('inscripcion/{id}', function($id){
	$alumno = Alumno::find($id);
	$padre = Padre::where('alumno_id',$id)->get();
	$pdf = PDF::loadView('alumnos.inscripcion',compact('alumno', 'padre'))->setPaper('legal');
	return $pdf->stream();
})->name('inscripcion');
 
//---------------------------------------------------------------- 



Route::post('agregarAlumno','CursosController@agregarAlumno')->name('cursos.agregarAlumno');

Route::post('AgregarMateria','CursosController@agregarMateria')->name('cursos.agregarMateria');
