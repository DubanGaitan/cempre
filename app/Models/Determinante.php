<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Determinante extends Model
{
    protected $table = 'determinantes';

    protected $fillable = [
        'nombre_determinante',
        'estado_id',
        'esfera_id',
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function esfera()
    {
        return $this->belongsTo(Esfera::class);
    }

    public function respuestas()
    {
        return $this->hasMany(RespuestaEvaluacion::class);
    }

    public function recomendaciones()
    {
        return $this->hasMany(RecomendacionNivelMadurezDeterminante::class);
    }
}
