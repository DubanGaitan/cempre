<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActorCicloVida extends Model
{
    protected $table = 'actores_ciclo_vida';

    protected $fillable = [
        'opcion',
        'estado_id',
    ];

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class);
    }
}
