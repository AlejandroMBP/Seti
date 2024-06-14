<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienciaLaboral extends Model
{
    use HasFactory;

    protected $table = 'experiencia_laboral';

    protected $primaryKey = 'id_experiencia_laboral';

    protected $fillable = [
        'institucion',
        'fecha_inicio',
        'fecha_final',
        'memorial',
        'cargo',
        'id_hoja_vida',
        'referencia',
    ];

    public function hojaDeVida()
    {
        return $this->belongsTo(HojaDeVida::class, 'id_hoja_vida', 'id_hoja_vida');
    }
}
