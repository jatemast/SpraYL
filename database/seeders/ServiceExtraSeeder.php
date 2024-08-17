<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceExtra;


class ServiceExtraseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        
        ServiceExtra::create([
            'service' => 'ArmorAll Treatment',
             'description' => 'limpieza profunda'
        ]);

        ServiceExtra::create([
            'service' => 'ArmorAll proo ',
              'description' => 'limpieza profunda'
        ]);

        ServiceExtra::create([
            'service' => 'esponja y jabon ',
              'description' => 'limpieza profunda'
        ]);

    }
}
