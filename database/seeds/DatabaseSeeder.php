<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-01 20:57:41
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-25 11:25:32
 * @ Description:
 */


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VoyagerDatabaseSeeder::class);
        
        // Basic Settings
        $this->call(BasicSettingsTableSeeder::class);
        $this->call(BasicDataRowsTableSeeder::class);
        $this->call(BasicDataTypesTableSeeder::class);
        
        // Dummy data
        $this->call(UsersTableSeeder::class);

    }
}
