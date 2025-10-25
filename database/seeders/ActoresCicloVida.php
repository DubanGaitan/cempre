<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use App\Models\ActorCicloVida;
use Illuminate\Database\Seeder;

class ActoresCicloVida extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('data/actores_ciclo_vida.json'));
        $actores_ciclo_vida = json_decode($json, true);

        foreach ($actores_ciclo_vida as $actor_ciclo_vida) {
            ActorCicloVida::create($actor_ciclo_vida);
        }
    }
}
