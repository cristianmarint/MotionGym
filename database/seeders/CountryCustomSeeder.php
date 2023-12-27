<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryCustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sqlFile = storage_path('raw_sql/country.sql');
        $this->command->info('CountryCustomSeeder init! ' . $sqlFile);
        DB::unprepared(file_get_contents($sqlFile));
        $this->command->info('CountryCustomSeeder done!');
    }
}
