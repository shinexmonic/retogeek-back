<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Novedad;
use Illuminate\Http\Request;
use App\Http\Requests\TareasRequest;
use App\Http\Requests\TareasActEstadoRequest;
use App\Http\Resources\TareaResource;
use App\Http\Equivalencias\equivalencias;
use JWTAuth;
use DB;

class TareasController extends Controller
{
    protected $user;
    public function __construct(Request $request)
    {
        $this->equivalencias = new equivalencias;
        $token = $request->header('Authorization');
        if($token != '')
            //En caso de que requiera autentifiación la ruta obtenemos el usuario y lo almacenamos en una variable, nosotros no lo utilizaremos.
            $this->user = JWTAuth::parseToken()->authenticate();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarTareas(Request $request)
    {
        //poner equivalencias aqui
        $tareas = Tarea::select('dependencias.nombre as dependencia', 'tareas.fecha_limite', 'tareas.descripcion', 'tareas.id', DB::raw("CONCAT(trabajadores.nombres, ' ', trabajadores.apellidos) as persona"))
        ->join('trabajadores', 'trabajadores.id', 'tareas.id_trabajador')
        ->join('dependencias', 'dependencias.id', 'trabajadores.id_dependencia')
        ->where('id_estado', $this->equivalencias::estados()[$request->estado])
        ->paginate(3);

        $tareasSend = ['pagination' => [
            'total'        => $tareas->total(),
            'current_page' => $tareas->currentPage(),
            'per_page'     => $tareas->perPage(),
            'last_page'    => $tareas->lastPage(),
            'from'         => $tareas->firstItem(),
            'to'           => $tareas->lastItem(),
        ],'tareas' => $tareas];

        return new TareaResource($tareasSend);
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
        $dependencias = Tarea::where('id',$request->id_tarea)->update(['id_estado' => $request->id_estado]);
        $novedad = Novedad::create([
            'observaciones' => $request->observaciones,
            'id_tarea' => $request->id_tarea,
            'fecha' => $request->fecha
        ]);
        return new TareaResource($novedad);
    }
}
