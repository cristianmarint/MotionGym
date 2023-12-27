<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionCustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sqlFile = storage_path('raw_sql/region.sql');
        $this->command->info('RegionCustomSeeder init! ' . $sqlFile);
        DB::unprepared(file_get_contents($sqlFile));
        $this->command->info('RegionCustomSeeder done!');
    }
}
