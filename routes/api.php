<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\TareasController;

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

Route::get('listarTareas', [TareasController::class, 'listarTareas']);
Route::post('guardar/tareas', [TareasController::class, 'guardar']);
Route::put('cambiarEstado/tareas', [TareasController::class, 'cambiarEstado']);

Route::get('listarTrabajadores', [TrabajadorController::class, 'listarTrabajadores']);
Route::post('guardar/trabajadores', [TrabajadorController::class, 'guardar']);

Route::get('listarDependencias', [DependenciaController::class, 'listarDependencias']);
Route::post('guardar/dependencias', [DependenciaController::class, 'guardar']);
