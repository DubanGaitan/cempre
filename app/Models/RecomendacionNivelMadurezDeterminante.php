<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecomendacionNivelMadurezDeterminante extends Model
{
    protected $table = 'recomendaciones_niveles_madurez_determinantes';

    protected $fillable = [
        'nivel_madurez_id',
        'esfera_id',
        'determinante_id',
        'recomendacion',
    ];

    public function nivelMadurez()
    {
        return $this->belongsTo(NivelMadurez::class);
    }

    public function esfera()
    {
        return $this->belongsTo(Esfera::class);
    }

    public function determinante()
    {
        return $this->belongsTo(Determinante::class);
    }
}
