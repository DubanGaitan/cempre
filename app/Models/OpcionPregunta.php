<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpcionPregunta extends Model
{
    protected $table = 'opciones_preguntas';

    protected $fillable = [
        'opcion',
        'peso_ponderado',
        'pregunta_id',
        'estado_id',
    ];

    public function pregunta()
    {
        return $this->belongsTo(Pregunta::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
