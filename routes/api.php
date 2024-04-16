<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Ruta para consultar la información de un estudiante por matrícula
Route::get('/students/{matricula}', [StudentController::class, 'show']);

// Rutas para suscribir y dar de baja a un estudiante en una asignatura
Route::post('/students/{matricula}/subjects/{codigo}', [StudentController::class, 'subscribe']);
Route::delete('/students/{matricula}/subjects/{codigo}', [StudentController::class, 'unsubscribe']);

// Ruta para consultar el horario del estudiante
Route::get('/students/{matricula}/schedule', [StudentController::class, 'schedule']);

// Ruta para consultar la información de una asignatura por clave
Route::get('/subjects/{codigo}', [SubjectController::class, 'show']);
