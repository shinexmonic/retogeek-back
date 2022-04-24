<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\TareasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CargoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('crearToken', [AuthController::class, 'crearToken']);

Route::group(['middleware' => ['jwt.verify']], function() {
	//Todo lo que este dentro de este grupo requiere verificación de usuario.
	Route::get('listarCargos', [CargoController::class, 'listarCargos']);

	Route::get('listarTareas/{estado}', [TareasController::class, 'listarTareas']);
	Route::post('guardar/tarea', [TareasController::class, 'guardar']);
	Route::post('cambiarEstado/tareas', [TareasController::class, 'cambiaEstado']);

	Route::get('listarTrabajadores', [TrabajadorController::class, 'listarTrabajadores']);
	Route::post('guardar/trabajadores', [TrabajadorController::class, 'guardar']);

	Route::get('listarDependencias', [DependenciaController::class, 'listarDependencias']);
	Route::post('guardar/dependencias', [DependenciaController::class, 'guardar']);
});

