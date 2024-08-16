<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\service_extra;
use GuzzleHttp\Promise\Create;

class ServiceExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        service_extra::create([
            'service' => 'ArmorAll Treatment',
             'description' => 'limpieza profunda'
        ]);

        service_extra::create([
            'service' => 'ArmorAll proo ',
              'description' => 'limpieza profunda'
        ]);

        service_extra::create([
            'service' => 'esponja y jabon ',
              'description' => 'limpieza profunda'
        ]);
    }
}
