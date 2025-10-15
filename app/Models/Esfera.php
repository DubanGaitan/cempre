<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Esfera extends Model
{
    protected $table = 'esferas';

    protected $fillable = [
        'nombre_esfera',
        'estado_id',
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function recomendaciones()
    {
        return $this->hasMany(RecomendacionNivelMadurezDeterminante::class);
    }
}
