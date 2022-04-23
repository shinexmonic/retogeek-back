<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;
use App\Http\Resources\TrabajadorResource;
use App\Http\Requests\TrabajadorRequest;

class TrabajadorController extends Controller
{
    protected $user;
    public function __construct(Request $request)
    {
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
    public function listarTrabajadores()
    {
        $dependencias = Trabajador::all();

        return new TrabajadorResource($dependencias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(TrabajadorRequest $request)
    {
        $dependencias = Trabajador::create($request->all());
        return new TrabajadorResource($dependencias);
    }
}
