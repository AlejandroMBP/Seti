@extends('layouts.app')

@section('title', 'Agregar Preguntas')

@section('content')
<div class="container">
    <h2>Agregar Preguntas a: {{ $encuesta->titulo }}</h2>
    <form action="{{ route('pregunta.store', $encuesta->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="enunciado">Enunciado de la Pregunta</label>
            <input type="text" name="enunciado" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo de Pregunta</label>
            <select name="tipo" class="form-control" required>
                <option value="multiple">Selección Múltiple</option>
                <option value="boolean">Verdadero/Falso</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar Pregunta</button>
    </form>

    <hr>

    <h3>Preguntas Existentes</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Enunciado</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($preguntas as $pregunta)
                <tr>
                    <td>{{ $pregunta->enunciado }}</td>
                    <td>{{ $pregunta->tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
