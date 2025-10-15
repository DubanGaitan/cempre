<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoModeloNegocio extends Model
{
    protected $table = 'tipos_modelos_negocio';

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
