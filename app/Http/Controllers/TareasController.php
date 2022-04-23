<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Http\Requests\TareasRequest;
use App\Http\Requests\TareasActEstadoRequest;
use App\Http\Resources\TareaResource;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarTareas()
    {
        //poner equivalencias aqui
        $dependencias = Tarea::all();
        return new TareaResource($dependencias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(TareasRequest $request)
    {
        $dependencias = Tarea::create($request->all());
        return new TareaResource($dependencias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cambiaEstado(TareasActEstadoRequest $request)
    {
        $dependencias = Tareas::find($id)->update($request->update);
        return new TrabajadorResource($dependencias);
    }
}
