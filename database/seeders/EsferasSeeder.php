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
        $esferas = [
            'Cadena de valor sostenible',
            'Estrategia',
            'Modelo de negocio',
        ];

        foreach ($esferas as $esfera){
            Esfera::create([
                'nombre_esfera' => $esfera,
                'estado_id' => 1,
            ]);
        }
    }
}
