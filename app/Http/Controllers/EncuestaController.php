<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encuesta;

class EncuestaController extends Controller
{
    public function index()
    {
        $encuestas = Encuesta::paginate(6);
        return view('components.encuestas', compact('encuestas'));
    }

    public function create()
    {
        return view('components.agregarEncuesta');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|max:65535',
            'estado'=>'request|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
        ]);

        // Crear una nueva encuesta
        Encuesta::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
        ]);

        // Redirigir a la lista de encuestas con un mensaje de éxito
        return redirect()->route('encuesta.index')->with('success', 'Encuesta creada correctamente.');
    }

    public function edit(Encuesta $encuesta){

        return view('encuestas.edit', compact('encuesta'));
    }

    public function update(Request $request, $id) {
        try {
            // Valida los datos del formulario de edición aquí si es necesario
            
            // Actualiza la encuesta
            $encuesta = Encuesta::findOrFail($id);
            $encuesta->titulo = $request->titulo;
            $encuesta->descripcion = $request->descripcion;
            $encuesta->fecha_inicio = $request->fecha_inicio;
            $encuesta->fecha_fin = $request->fecha_fin;
            $encuesta->save();
    
            return redirect()->route('encuesta.index')->with('success', 'Encuesta actualizada correctamente');
        } catch (\Exception $e) {
            // Manejo de la excepción
            return redirect()->route('encuesta.index')->with('error', 'Ocurrió un error al actualizar la encuesta: ' . $e->getMessage());
        }
    }    
    public function disable($id){
        $encuesta = Encuesta::find($id);
    if ($encuesta) {
        // Cambia el estado de la encuesta basado en su estado actual
        if ($encuesta->estado == 1) {
            $encuesta->estado = 0;
            $encuesta->save();
            return redirect()->route('encuesta.index')->with('error', 'Encuesta desabilidata correctamente');

        } elseif ($encuesta->estado == 0) {
            $encuesta->estado = 1;
            $encuesta->save();
            return redirect()->route('encuesta.index')->with('success', 'Encuesta habilitada correctamente');

        }
        // $encuesta->save();
        // return redirect()->route('encuesta.index')->with('success', 'Encuesta actualizada correctamente');
    } else {
        return redirect()->route('encuesta.index')->with('error', 'Encuesta no encontrada');
    }
    }

    public function destroy(Encuesta $encuesta){
        // Eliminar la encuesta
        $encuesta->delete();

        // Redirigir a la lista de encuestas con un mensaje de éxito
        return redirect()->route('encuestas.index')->with('success', 'Encuesta eliminada correctamente.');
    }

    // EncuestaController.php
public function addQuestions($id)
{
    $encuesta = Encuesta::findOrFail($id);
    $preguntas = $encuesta->preguntas; // Asumiendo que hay una relación 'preguntas' en el modelo 'Encuesta'
    return view('components.vistapreguntas', compact('encuesta', 'preguntas'));
}




}

