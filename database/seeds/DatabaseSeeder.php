<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-01 20:57:41
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 15:00:10
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
        // $this->call(UsersTableSeeder::class);
        $this->call(BasicSettingsTableSeeder::class);
    }
}
