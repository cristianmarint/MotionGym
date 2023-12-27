<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityCustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sqlFile = storage_path('raw_sql/city_bigfile.sql');
        $this->command->info('CityCustomSqlSeeder init! ' . $sqlFile);

        // Read the entire content of the SQL file
        $sqlContent = file_get_contents($sqlFile);

        if ($sqlContent === false) {
            $this->command->error('Error reading SQL file: ' . $sqlFile);
            return;
        }

        // Split SQL content into individual queries
        $queries = array_filter(array_map('trim', explode(';', $sqlContent)));

        // Start a transaction to improve performance
        DB::beginTransaction();

        try {
            // Execute each query one by one
            foreach ($queries as $query) {
                DB::unprepared($query.';');
            }

            // Commit the transaction
            DB::commit();

            $this->command->info('CityCustomSqlSeeder done!');
        } catch (\Exception $e) {
            // Rollback the transaction if an error occurs
            DB::rollback();

            $this->command->error('Error executing SQL file: ' . $e->getMessage());
        }
    }
}
