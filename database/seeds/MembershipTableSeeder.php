<?php

use Illuminate\Database\Seeder;

class MembershipTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('membership')->delete();
        
        \DB::table('membership')->insert(array (
            0 => 
            array (
                'id' => 25,
                'person_id' => 1,
                'invoice_id' => 6,
                'extra_id' => 4,
                'month' => '2019-07-01',
                'price' => 100.0,
                'deleted_at' => '2019-08-01 03:09:51',
                'created_at' => '2019-08-01 02:59:55',
                'updated_at' => '2019-08-01 03:09:51',
            ),
            1 => 
            array (
                'id' => 26,
                'person_id' => 2,
                'invoice_id' => 6,
                'extra_id' => 3,
                'month' => '2019-08-01',
                'price' => 100.0,
                'deleted_at' => NULL,
                'created_at' => '2019-08-01 03:42:44',
                'updated_at' => '2019-08-01 15:18:27',
            ),
        ));
        
        
    }
}