<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateCustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sqlFile = storage_path('raw_sql/state.sql');
        $this->command->info('StateCustomSeeder init! ' . $sqlFile);
        DB::unprepared(file_get_contents($sqlFile));
        $this->command->info('StateCustomSeeder done!');
    }
}
