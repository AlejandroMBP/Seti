<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HojaDeVida extends Model
{
    use HasFactory;

    protected $table = 'hoja_de_vida';

    protected $primaryKey = 'id_hoja_vida';

    protected $fillable = [
        'id_titulo',
        'id_persona',
        'fecha_creacion',
        'fecha_modificacion',
        'descripcion',
        'id_formacion',
        'id_certificacion',
    ];

    public function formacion()
    {
        return $this->belongsTo(Formacion::class, 'id_formacion', 'id_formacion');
    }

    public function certificacion()
    {
        return $this->belongsTo(Certificacion::class, 'id_certificacion', 'id_certificacion');
    }
}
