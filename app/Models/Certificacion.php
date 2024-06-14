<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificacion extends Model
{
    use HasFactory;

    protected $table = 'certificacion';

    protected $primaryKey = 'id_certificacion';

    protected $fillable = [
        'id_hoja_vida',
        'institucion_nombre',
        'numero_titulo',
        'grado_formacion',
        'fecha_inicio',
        'fecha_fin',
        'carrera',
    ];

    public function hojaDeVida()
    {
        return $this->belongsTo(HojaDeVida::class, 'id_hoja_vida', 'id_hoja_vida');
    }
}
