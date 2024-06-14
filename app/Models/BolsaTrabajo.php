<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BolsaTrabajo extends Model
{
    use HasFactory;

    protected $table = 'bolsa_trabajo';

    protected $primaryKey = 'id_bolsa_trabajo';

    protected $fillable = [
        'id_institucion',
        'publicacion',
        'estado_bolsa',
        'fecha_inicio',
        'id_convenios',
    ];

    public function institucion()
    {
        return $this->belongsTo(Institucion::class, 'id_institucion', 'id_institucion');
    }
}
