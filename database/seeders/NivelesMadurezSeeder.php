<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;
use App\Models\NivelMadurez;

class NivelesMadurezSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('data/niveles_madurez.json'));
        $niveles_madurez = json_decode($json, true);

        foreach ($niveles_madurez as $nivel) {
            NivelMadurez::create($nivel);
        }
    }
}
