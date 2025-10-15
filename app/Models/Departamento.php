<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';

    protected $fillable = [
        'departamento',
    ];

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class);
    }
}
