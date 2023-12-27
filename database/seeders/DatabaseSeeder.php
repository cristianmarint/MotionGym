<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RegionCustomSeeder::class,
            SubRegionCustomSeeder::class,
            CountryCustomSeeder::class,
            StateCustomSeeder::class,
            CityCustomSeeder::class,
        ]);
    }
}
