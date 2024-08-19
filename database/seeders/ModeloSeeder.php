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
            ['name' => 'Camry', 'marca_id' => 1, 'categoria_id' => 1, 'year' => 2024, 'color' => 'Silver'],
            ['name' => 'Corolla', 'marca_id' => 1, 'categoria_id' => 1, 'year' => 2024, 'color' => 'White'],
            ['name' => 'F-150', 'marca_id' => 2, 'categoria_id' => 9, 'year' => 2024, 'color' => 'Blue'],
            ['name' => 'Mustang', 'marca_id' => 2, 'categoria_id' => 1, 'year' => 2024, 'color' => 'Red'],
            ['name' => 'Silverado', 'marca_id' => 3, 'categoria_id' => 9, 'year' => 2024, 'color' => 'Black'],
            ['name' => 'Civic', 'marca_id' => 4, 'categoria_id' => 1, 'year' => 2024, 'color' => 'Gray'],
            ['name' => 'Altima', 'marca_id' => 5, 'categoria_id' => 1, 'year' => 2024, 'color' => 'White'],
            ['name' => 'Elantra', 'marca_id' => 6, 'categoria_id' => 1, 'year' => 2024, 'color' => 'Silver'],
            ['name' => 'Sorento', 'marca_id' => 7, 'categoria_id' => 2, 'year' => 2024, 'color' => 'Black'],
            ['name' => 'Outback', 'marca_id' => 8, 'categoria_id' => 2, 'year' => 2024, 'color' => 'Green'],
            // ... añade más modelos según sea necesario
        ];
        
        foreach ($modelos as $modelo) {
            Modelo::create($modelo);
        }
    }
}
