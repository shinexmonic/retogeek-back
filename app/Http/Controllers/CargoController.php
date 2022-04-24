<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\DependenciaResource;
use App\Models\Cargo;

class CargoController extends Controller
{
    public function listarCargos()
    {
    	$cargos = Cargo::all();
    	return new DependenciaResource($cargos);
    }
}
