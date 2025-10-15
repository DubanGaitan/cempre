<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RespuestaEvaluacion extends Model
{
    protected $table = 'respuestas_evaluaciones';

    protected $fillable = [
        'evaluacion_id',
        'pregunta',
        'determinante_id',
        'respuesta',
        'peso_ponderado',
    ];

    public function evaluacion()
    {
        return $this->belongsTo(Evaluacion::class);
    }

    public function determinante()
    {
        return $this->belongsTo(Determinante::class);
    }
}
