<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company')->insert([
            [
                'name' => 'Motion Gym',
                'identification' => '111111111',
                'identification_type' => 'NIT',
                'address' => 'Dir A',
                'city_id' => 20661,
                'phone' => '111111111',
                'email' => 'admin@motion.gym',
                'industry' => 'gym',
            ],
            [
                'name' => 'Other Company',
                'identification' => '222222222',
                'identification_type' => 'NIT',
                'address' => 'Dir B',
                'city_id' => 50726,  // Reemplaza con el ID de la ciudad correspondiente
                'phone' => '987654321',
                'email' => 'empresaB@example.com',
                'industry' => 'food',
            ],
            [
                'name' => 'Seguros Sura',
                'identification' => '3333333333',
                'identification_type' => 'NIT',
                'address' => 'Dir C',
                'city_id' => 50734,  // Reemplaza con el ID de la ciudad correspondiente
                'phone' => '555555555',
                'email' => 'empresaC@example.com',
                'industry' => 'health',
            ],
            [
                'name' => 'Health Company',
                'identification' => '4444444444',
                'identification_type' => 'NIT',
                'address' => 'Dir D',
                'city_id' => 4,  // Reemplaza con el ID de la ciudad correspondiente
                'phone' => '444444444',
                'email' => 'empresaD@example.com',
                'industry' => 'health',
            ],
        ]);
    }
}
