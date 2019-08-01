<?php

use Illuminate\Database\Seeder;

class ExtraTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('extra')->delete();
        
        \DB::table('extra')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Mothers Day',
                'description' => NULL,
                'percentage' => 50,
                'deleted_at' => NULL,
                'created_at' => '2019-07-28 19:38:29',
                'updated_at' => '2019-07-28 19:38:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Fathers Day',
                'description' => NULL,
                'percentage' => 40,
                'deleted_at' => NULL,
                'created_at' => '2019-07-31 14:18:13',
                'updated_at' => '2019-07-31 14:18:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'New year 2020!!',
                'description' => NULL,
                'percentage' => 25,
                'deleted_at' => NULL,
                'created_at' => '2019-07-31 20:37:58',
                'updated_at' => '2019-07-31 20:38:16',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'None',
                'description' => NULL,
                'percentage' => 0,
                'deleted_at' => NULL,
                'created_at' => '2019-08-01 03:03:37',
                'updated_at' => '2019-08-01 03:03:37',
            ),
        ));
        
        
    }
}