<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';

    protected $fillable = [
        'pregunta',
        'determinante_id',
        'estado_id',
    ];

    public function determinante()
    {
        return $this->belongsTo(Determinante::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
