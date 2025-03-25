<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProduccionAcademicaController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\DocumentoSoporteController;
use App\Http\Controllers\EstudioController;
use App\Http\Controllers\InformacionContactoController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    // Rutas para Persona
    Route::get('/personas', [PersonaController::class, 'index']);
    Route::post('/personas', [PersonaController::class, 'store']);
    Route::get('/personas/{id}', [PersonaController::class, 'show']);
    Route::put('/personas/{id}', [PersonaController::class, 'update']);
    Route::delete('/personas/{id}', [PersonaController::class, 'destroy']);

    // Rutas para Producción Académica
    Route::get('/producciones', [ProduccionAcademicaController::class, 'index']);
    Route::post('/producciones', [ProduccionAcademicaController::class, 'store']);
    Route::get('/producciones/{id}', [ProduccionAcademicaController::class, 'show']);
    Route::put('/producciones/{id}', [ProduccionAcademicaController::class, 'update']);
    Route::delete('/producciones/{id}', [ProduccionAcademicaController::class, 'destroy']);

    // Rutas para Experiencia
    Route::get('/experiencias', [ExperienciaController::class, 'index']);
    Route::post('/experiencias', [ExperienciaController::class, 'store']);
    Route::get('/experiencias/{id}', [ExperienciaController::class, 'show']);
    Route::put('/experiencias/{id}', [ExperienciaController::class, 'update']);
    Route::delete('/experiencias/{id}', [ExperienciaController::class, 'destroy']);

    // Rutas para Idioma
    Route::get('/idiomas', [IdiomaController::class, 'index']);
    Route::post('/idiomas', [IdiomaController::class, 'store']);
    Route::get('/idiomas/{id}', [IdiomaController::class, 'show']);
    Route::put('/idiomas/{id}', [IdiomaController::class, 'update']);
    Route::delete('/idiomas/{id}', [IdiomaController::class, 'destroy']);

    // Rutas para Documento Soporte
    Route::get('/documentos', [DocumentoSoporteController::class, 'index']);
    Route::post('/documentos', [DocumentoSoporteController::class, 'store']);
    Route::get('/documentos/{id}', [DocumentoSoporteController::class, 'show']);
    Route::put('/documentos/{id}', [DocumentoSoporteController::class, 'update']);
    Route::delete('/documentos/{id}', [DocumentoSoporteController::class, 'destroy']);

    // Rutas para Estudio
    Route::get('/estudios', [EstudioController::class, 'index']);
    Route::post('/estudios', [EstudioController::class, 'store']);
    Route::get('/estudios/{id}', [EstudioController::class, 'show']);
    Route::put('/estudios/{id}', [EstudioController::class, 'update']);
    Route::delete('/estudios/{id}', [EstudioController::class, 'destroy']);

    // Rutas para Información de Contacto
    Route::get('/contactos', [InformacionContactoController::class, 'index']);
    Route::post('/contactos', [InformacionContactoController::class, 'store']);
    Route::get('/contactos/{id}', [InformacionContactoController::class, 'show']);
    Route::put('/contactos/{id}', [InformacionContactoController::class, 'update']);
    Route::delete('/contactos/{id}', [InformacionContactoController::class, 'destroy']);
});
