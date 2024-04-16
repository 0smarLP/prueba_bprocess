<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;

class StudentController extends Controller
{
    /**
     * Summary of show
     * @param string $matricula
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $matricula): \Illuminate\Http\JsonResponse
    {
        // Buscamos el estudiante por la matrícula
        $student = Student::where('matricula', $matricula)->first();

        // Si no se encuentra el estudiante, devolvemos un error 404
        if (!$student) {
            return response()->json(['message' => 'Estudiante no encontrado'], 404);
        }

        // Devolvemos el estudiante
        return response()->json($student);
    }

    /**
     * Summary of subscribe
     * @param mixed $matricula
     * @param mixed $codigo
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function subscribe($matricula, $codigo): \Illuminate\Http\JsonResponse
    {
        // Buscamos el estudiante y la asignatura
        $student = Student::where('matricula', $matricula)->first();
        // Buscamos la asignatura por el código
        $subject = Subject::where('codigo', $codigo)->first();

        // Si no se encuentra el estudiante o la asignatura, devolvemos un error 404
        if (!$student || !$subject) {
            return response()->json(['message' => 'Estudiante o asignatura no encontrados'], 404);
        }

        // Asociamos la asignatura al estudiante
        $student->subjects()->attach($subject);

        // Devolvemos un mensaje de éxito
        return response()->json(['message' => 'Inscripción realizada con éxito']);
    }

    /**
     * Summary of unsubscribe
     * @param mixed $matricula
     * @param mixed $codigo
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function unsubscribe($matricula, $codigo): \Illuminate\Http\JsonResponse
    {
        // Buscamos el estudiante y la asignatura
        $student = Student::where('matricula', $matricula)->first();
        // Buscamos la asignatura por el código
        $subject = Subject::where('codigo', $codigo)->first();

        // Si no se encuentra el estudiante o la asignatura, devolvemos un error 404
        if (!$student || !$subject) {
            return response()->json(['message' => 'Estudiante o asignatura no encontrados'], 404);
        }

        // Desasociamos la asignatura del estudiante
        $student->subjects()->detach($subject);

        // Devolvemos un mensaje de éxito
        return response()->json(['message' => 'Baja realizada con éxito']);
    }

    /**
     * Summary of schedule
     * @param mixed $matricula
     * @return mixed|\Illuminate\Http\JsonResponse
     */
    public function schedule($matricula): \Illuminate\Http\JsonResponse
    {
        // Buscamos el estudiante por la matrícula y cargamos las asignaturas
        $student = Student::where('matricula', $matricula)->with('subjects')->first();

        // Si no se encuentra el estudiante, devolvemos un error 404
        if (!$student) {
            return response()->json(['message' => 'Estudiante no encontrado'], 404);
        }

        // Devolvemos las asignaturas del estudiante
        return response()->json($student->subjects);
    }
}
