<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;

class Colorseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            'Black',
            'White',
            'Silver',
            'Gray',
            'Red',
            'Blue',
            'Green',
            'Brown',
            'Yellow',
            'Orange'
        ];

        foreach ($colors as $color) {
            Color::create([
                'color' => $color
            ]);
        }
    }
}
