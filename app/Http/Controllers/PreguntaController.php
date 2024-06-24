<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;

class PreguntaController extends Controller
{
    public function store(Request $request, $encuestaId)
    {
        $request->validate([
            'enunciado' => 'required|string|max:255',
            'tipo' => 'required|string',
        ]);

        Pregunta::create([
            'id_encuesta' => $encuestaId,
            'enunciado' => $request->enunciado,
            'tipo' => $request->tipo,
        ]);

        return redirect()->route('encuesta.addQuestions', $encuestaId)->with('success', 'Pregunta agregada correctamente.');
    }
}
