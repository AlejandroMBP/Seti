<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formacion extends Model
{
    use HasFactory;

    protected $table = 'formacion';

    protected $primaryKey = 'id_formacion';

    protected $fillable = [
        'id_hoja_vida',
        'nombre_institucion',
        'fecha_emision',
        'institucion',
        'encargado',
        'rol',
        'codigo',
    ];

    public function hojaDeVida()
    {
        return $this->belongsTo(HojaDeVida::class, 'id_hoja_vida', 'id_hoja_vida');
    }
}
