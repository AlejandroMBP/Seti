<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_encuesta',
        'enunciado',
        'tipo',
    ];

    public function encuesta()
    {
        return $this->belongsTo(Encuesta::class, 'id_encuesta');
    }

    public function opciones()
    {
        return $this->hasMany(OpcionPregunta::class, 'id_pregunta');
    }

    public function preguntasRespondidas()
    {
        return $this->hasMany(PreguntaRespondida::class, 'id_pregunta');
    }
}
