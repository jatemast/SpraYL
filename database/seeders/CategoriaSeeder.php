<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['name' => 'Sedan', 'precio_servicio' => 45.00, 'tiempo_servicio' => 60],
            ['name' => 'SUV', 'precio_servicio' => 50.00, 'tiempo_servicio' => 70],
            ['name' => 'SUV LARGE', 'precio_servicio' => 60.00, 'tiempo_servicio' => 80],
            ['name' => 'Mini Van', 'precio_servicio' => 65.00, 'tiempo_servicio' => 90],
            ['name' => 'SUV Full Size', 'precio_servicio' => 70.00, 'tiempo_servicio' => 90],
            ['name' => 'Small Truck', 'precio_servicio' => 45.00, 'tiempo_servicio' => 60],
            ['name' => 'Medium Truck', 'precio_servicio' => 60.00, 'tiempo_servicio' => 80],
            ['name' => 'Truck Dualie', 'precio_servicio' => 80.00, 'tiempo_servicio' => 100],
            ['name' => 'Truck Full Size', 'precio_servicio' => 70.00, 'tiempo_servicio' => 90],
            ['name' => 'Monster Truck', 'precio_servicio' => 100.00, 'tiempo_servicio' => 90],
        ];

        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    
    }
}
