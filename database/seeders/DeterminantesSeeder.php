<?php

namespace Database\Seeders;

use App\Models\Determinante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeterminantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Determinante::create([
            'nombre_determinante' => 'Ciclo de vida',
            'estado_id' => 1,
            'esfera_id' => 1,
        ]);
        Determinante::create([
            'nombre_determinante' => 'Estrategias circulares',
            'estado_id' => 1,
            'esfera_id' => 1,
        ]);
        Determinante::create([
            'nombre_determinante' => 'Triple impacto (DS)',
            'estado_id' => 1,
            'esfera_id' => 1,
        ]);
        Determinante::create([
            'nombre_determinante' => 'Entorno empresarial',
            'estado_id' => 1,
            'esfera_id' => 2,
        ]);
        Determinante::create([
            'nombre_determinante' => 'Propósito Empresarial',
            'estado_id' => 1,
            'esfera_id' => 2,
        ]);
        Determinante::create([
            'nombre_determinante' => 'Objetivos / Metas circulares',
            'estado_id' => 1,
            'esfera_id' => 2,
        ]);
        Determinante::create([
            'nombre_determinante' => 'Entrega de valor',
            'estado_id' => 1,
            'esfera_id' => 3,
        ]);
        Determinante::create([
            'nombre_determinante' => 'Creación de valor',
            'estado_id' => 1,
            'esfera_id' => 3,
        ]);
        Determinante::create([
            'nombre_determinante' => 'Captura de valor (Financiero)',
            'estado_id' => 1,
            'esfera_id' => 3,
        ]);
    }
}
