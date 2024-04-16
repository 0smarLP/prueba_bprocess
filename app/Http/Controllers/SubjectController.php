<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($codigo): \Illuminate\Http\JsonResponse
    {
        // Buscamos la asignatura por el código
        $subject = Subject::where('codigo', $codigo)->with('teachers')->first();

        // Si no se encuentra la asignatura, devolvemos un error 404
        if (!$subject) {
            return response()->json(['message' => 'Asignatura no encontrada'], 404);
        }

        // Devolvemos la asignatura
        return response()->json($subject);
    }
}
