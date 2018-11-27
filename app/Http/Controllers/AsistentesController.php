<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistente;

class AsistentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistentes = Asistente::all();
        return view("asistentes.index",compact("asistentes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $asistente = Asistente::all();
        return view("asistentes.create",compact("asistentes"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asistente = new Asistente;
        $asistente->cuil = $request->cuil;
        $asistente->apellido = $request->apellido;
        $asistente->nombre = $request->nombre;
        $asistente->matricula = $request->matricula;
        $asistente->titulo = $request->titulo;
        $asistente->direccion = $request->direccion;
        $asistente->telefono = $request->telefono;
        $asistente->email = $request->email;

        $asistente->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asistente = Asistente::find($id);
        return view("asistentes.show",compact("asistente"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistente = Asistente::find($id);
        return view("asistentes.edit",compact("asistente"));
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
        $asistente = Asistente::find($id);
        $asistente->cuil = $request->cuil;
        $asistente->apellido = $request->apellido;
        $asistente->nombre = $request->nombre;
        $asistente->matricula = $request->matricula;
        $asistente->titulo = $request->titulo;
        $asistente->direccion = $request->direccion;
        $asistente->telefono = $request->telefono;
        $asistente->email = $request->email;

        $asistente->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asistente = Asistente::find($id);
        $asistente->delete();
    }
}
