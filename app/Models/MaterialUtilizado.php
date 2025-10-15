<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialUtilizado extends Model
{
    protected $table = 'materiales_utilizados';

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
