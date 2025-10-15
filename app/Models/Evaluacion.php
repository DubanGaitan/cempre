<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    protected $table = 'evaluaciones';

    protected $fillable = [
        'correo',
        'nombre_diligenciador',
        'cargo',
        'razon_social',
        'nit',
        'producto_principal',
        'numero_contacto',
        'direccion',
        'sector_produccion',
        'departamento_id',
        'municipio_id',
        'actor_ciclo_vida_id',
        'tipo_modelo_negocio_id',
        'material_utilizado_id',
        'nivel_madurez_id',
        'permitir_reevaluacion',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class);
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function actorCicloVida()
    {
        return $this->belongsTo(ActorCicloVida::class);
    }

    public function tipoModeloNegocio()
    {
        return $this->belongsTo(TipoModeloNegocio::class);
    }

    public function materialUtilizado()
    {
        return $this->belongsTo(MaterialUtilizado::class);
    }

    public function nivelMadurez()
    {
        return $this->belongsTo(NivelMadurez::class);
    }

    public function respuestas()
    {
        return $this->hasMany(RespuestaEvaluacion::class);
    }
}

