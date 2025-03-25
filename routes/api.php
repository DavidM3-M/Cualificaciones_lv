<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\InformacionContactoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\DocumentoSoporteController;
use App\Http\Controllers\EstudioController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\ProduccionAcademicaController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function () {


// Rutas API
Route::apiResource('personas', PersonaController::class);
Route::apiResource('informacion-contacto', InformacionContactoController::class);
Route::apiResource('documentos', DocumentoController::class);
Route::apiResource('documentos-soporte', DocumentoSoporteController::class);
Route::apiResource('estudios', EstudioController::class);
Route::apiResource('experiencias', ExperienciaController::class);
Route::apiResource('idiomas', IdiomaController::class);
Route::apiResource('producciones-academicas', ProduccionAcademicaController::class);

    
});
