<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'estado',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function preguntas()
{
    return $this->hasMany(Pregunta::class);
}
}
