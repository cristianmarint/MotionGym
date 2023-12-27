<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubRegionCustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sqlFile = storage_path('raw_sql/subregion.sql');
        $this->command->info('SubRegionCustomSeeder init! ' . $sqlFile);
        DB::unprepared(file_get_contents($sqlFile));
        $this->command->info('SubRegionCustomSeeder done!');
    }
}
