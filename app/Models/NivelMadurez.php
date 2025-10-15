<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NivelMadurez extends Model
{
    protected $table = 'niveles_madurez';

    protected $fillable = [
        'nombre_nivel',
        'descripcion',
        'puntaje_min',
        'puntaje_max',
    ];

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class);
    }

    public function recomendaciones()
    {
        return $this->hasMany(RecomendacionNivelMadurezDeterminante::class);
    }
}
