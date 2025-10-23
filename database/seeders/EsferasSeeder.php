<?php

namespace Database\Seeders;

use App\Models\Esfera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EsferasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Esfera::create([
            'nombre_esfera' => 'Cadena de valor sostenible',
            'estado_id' => 1,
        ]);
        Esfera::create([
            'nombre_esfera' => 'Estrategia',
            'estado_id' => 1,
        ]);
        Esfera::create([
            'nombre_esfera' => 'Modelo de negocio',
            'estado_id' => 1,
        ]);
    }
}
