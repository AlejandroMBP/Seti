<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;

    protected $table = 'habilidades';

    protected $primaryKey = 'id_habilidades';

    protected $fillable = [
        'nombre',
        'nivel',
        'descripcion',
        'id_hoja_vida',
    ];

    public function hojaDeVida()
    {
        return $this->belongsTo(HojaDeVida::class, 'id_hoja_vida', 'id_hoja_vida');
    }
}
