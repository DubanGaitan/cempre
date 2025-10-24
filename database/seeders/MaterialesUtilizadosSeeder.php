<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MaterialUtilizado;

class MaterialesUtilizadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materiales = [
            'Vidrio',
            'Cartón',
            'Papel',
            'Metal',
            'Plástico',
            'Poliestireno expandido',
            'Material biobasado (Ej: E&E de biomasa)',
            'Multimaterial (Ej: Tetrapack)',
            'Madera',
            'No sabe',
        ];

        foreach ($materiales as $material) {
            MaterialUtilizado::create([
                'opcion' => $material,
                'estado_id' => 1,
            ]);
        }
    }
}
