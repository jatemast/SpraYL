<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Modelo;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modelos = [
            ['name' => 'Camry', 'marca_id' => 1, 'categoria_id' => 1, 'year' => 2024, ],
            ['name' => 'Corolla', 'marca_id' => 1, 'categoria_id' => 1, 'year' => 2024, ],
            ['name' => 'F-150', 'marca_id' => 2, 'categoria_id' => 9, 'year' => 2024, ],
            ['name' => 'Mustang', 'marca_id' => 2, 'categoria_id' => 1, 'year' => 2024, ],
            ['name' => 'Silverado', 'marca_id' => 3, 'categoria_id' => 9, 'year' => 2024, ],
            ['name' => 'Civic', 'marca_id' => 4, 'categoria_id' => 1, 'year' => 2024, ],
            ['name' => 'Altima', 'marca_id' => 5, 'categoria_id' => 1, 'year' => 2024, ],
            ['name' => 'Elantra', 'marca_id' => 6, 'categoria_id' => 1, 'year' => 2024, ],
            ['name' => 'Sorento', 'marca_id' => 7, 'categoria_id' => 2, 'year' => 2024, ],
            ['name' => 'Outback', 'marca_id' => 8, 'categoria_id' => 2, 'year' => 2024, ],
            // ... añade más modelos según sea necesario
        ];
        
        foreach ($modelos as $modelo) {
            Modelo::create($modelo);
        }
    }
}
