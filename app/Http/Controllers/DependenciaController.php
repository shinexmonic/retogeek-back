<?php

namespace App\Http\Controllers;

use App\Models\Dependencia;
use Illuminate\Http\Request;
use App\Http\Resources\DependenciaResource;
use App\Http\Requests\DependenciaRequest;

class DependenciaController extends Controller
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
    public function listarDependencias()
    {
        $dependencias = Dependencia::all();
        return new DependenciaResource($dependencias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(DependenciaRequest $request)
    {
        $dependencias = Dependencia::create($request->all());
        return new DependenciaResource($dependencias);
    }
}
