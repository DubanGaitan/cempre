<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\RecomendacionNivelMadurezDeterminante;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;

class RecomendacionesMadurezDeterminanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('data/recomendaciones_madurez_determinante.json'));
        $recomendaciones_madurez_determinante = json_decode($json, true);

        foreach ($recomendaciones_madurez_determinante  as $recomendacion) {
            RecomendacionNivelMadurezDeterminante::create($recomendacion);
        }
    }
}
