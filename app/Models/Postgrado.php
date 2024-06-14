<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postgrado extends Model
{
    use HasFactory;

    protected $table = 'postgrado';

    protected $primaryKey = 'id_postgrado';

    protected $fillable = [
        'postulacion',
        'programa',
        'titulo',
        'fecha',
        'id_hoja_vida',
    ];

    public function hojaDeVida()
    {
        return $this->belongsTo(HojaDeVida::class, 'id_hoja_vida', 'id_hoja_vida');
    }
}
