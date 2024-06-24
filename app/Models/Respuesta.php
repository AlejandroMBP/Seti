<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pregunta_respondida',
        'id_opcion_pregunta',
        'respuesta_bool',
    ];

    public function preguntaRespondida()
    {
        return $this->belongsTo(PreguntaRespondida::class, 'id_pregunta_respondida');
    }

    public function opcionPregunta()
    {
        return $this->belongsTo(OpcionPregunta::class, 'id_opcion_pregunta');
    }
}
