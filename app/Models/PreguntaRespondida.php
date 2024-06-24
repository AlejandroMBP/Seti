<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntaRespondida extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_encuesta',
        'id_pregunta',
        'id_usuario',
    ];

    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class, 'id_pregunta');
    }

    public function encuesta()
    {
        return $this->belongsTo(Encuesta::class, 'id_encuesta');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function respuestas()
    {
        return $this->hasMany(Respuesta::class, 'id_pregunta_respondida');
    }
}
