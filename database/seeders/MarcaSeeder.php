<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marca;


class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            'Toyota', 'Ford', 'Chevrolet', 'Honda', 'Nissan', 'Hyundai', 'Kia', 'Subaru', 'BMW', 'Mercedes-Benz',
            'Audi', 'Lexus', 'Volkswagen', 'Mazda', 'Jeep', 'Ram', 'GMC', 'Dodge', 'Chrysler', 'Buick',
            'Acura', 'Infiniti', 'Lincoln', 'Volvo', 'Porsche', 'Land Rover', 'Jaguar', 'Mini', 'Mitsubishi', 'Cadillac',
            'Fiat', 'Tesla', 'Genesis', 'Alfa Romeo', 'Maserati', 'Bentley', 'Rolls-Royce', 'Ferrari', 'Lamborghini', 'Aston Martin',
            'McLaren', 'Bugatti', 'Lotus', 'Smart', 'Scion', 'Suzuki', 'Saab', 'Pontiac', 'Saturn', 'Hummer',
            'Mercury', 'Oldsmobile', 'Plymouth', 'DeSoto', 'Studebaker', 'Panoz', 'Fisker', 'DeLorean', 'Tucker', 'Pagani',
            'Koenigsegg', 'Spyker', 'Morgan', 'Caterham', 'Noble', 'Ariel', 'BAC', 'Radical', 'Rossion', 'Hennessey',
            'Saleen', 'Shelby', 'Callaway', 'Ruf', 'Wiesmann', 'Zenvo', 'Rimac', 'Gumpert', 'Vector', 'Mosler',
            'Panoz', 'SSC', 'Rezvani', 'Scuderia Cameron Glickenhaus', 'Lucid', 'Rivian', 'Karma', 'Bollinger', 'Canoo', 'Lordstown',
            'Nikola', 'Faraday Future', 'Byton', 'Polestar', 'Nio', 'Lynk & Co', 'Vinfast', 'Czinger', 'Pininfarina', 'Drako'
        ];

        foreach ($brands as $brand) {
            Marca::create(['brand' => $brand]); 
    }
}
}