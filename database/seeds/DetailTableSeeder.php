<?php

use Illuminate\Database\Seeder;

class DetailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('detail')->delete();
        
        \DB::table('detail')->insert(array (
            0 => 
            array (
                'id' => 1,
                'extra_id' => 1,
                'product_id' => 1,
                'invoice_id' => 4,
                'amount' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-07-31 09:10:37',
                'updated_at' => '2019-07-31 21:09:08',
            ),
            1 => 
            array (
                'id' => 2,
                'extra_id' => NULL,
                'product_id' => 1,
                'invoice_id' => 5,
                'amount' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-07-31 17:30:24',
                'updated_at' => '2019-07-31 21:08:49',
            ),
            2 => 
            array (
                'id' => 3,
                'extra_id' => 2,
                'product_id' => 2,
                'invoice_id' => 5,
                'amount' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-07-31 02:15:26',
                'updated_at' => '2019-07-31 21:09:16',
            ),
            3 => 
            array (
                'id' => 4,
                'extra_id' => NULL,
                'product_id' => 1,
                'invoice_id' => 2,
                'amount' => 2,
                'deleted_at' => NULL,
                'created_at' => '2019-07-30 15:37:10',
                'updated_at' => '2019-07-31 21:09:40',
            ),
            4 => 
            array (
                'id' => 5,
                'extra_id' => 2,
                'product_id' => 2,
                'invoice_id' => 4,
                'amount' => 5,
                'deleted_at' => NULL,
                'created_at' => '2019-07-30 15:42:55',
                'updated_at' => '2019-07-31 21:09:25',
            ),
            5 => 
            array (
                'id' => 36,
                'extra_id' => 2,
                'product_id' => 2,
                'invoice_id' => 3,
                'amount' => 1,
                'deleted_at' => NULL,
                'created_at' => '2019-07-31 16:20:26',
                'updated_at' => '2019-07-31 21:09:00',
            ),
            6 => 
            array (
                'id' => 37,
                'extra_id' => 2,
                'product_id' => 3,
                'invoice_id' => 3,
                'amount' => 5,
                'deleted_at' => NULL,
                'created_at' => '2019-07-31 16:25:53',
                'updated_at' => '2019-07-31 21:07:05',
            ),
            7 => 
            array (
                'id' => 45,
                'extra_id' => 3,
                'product_id' => 1,
                'invoice_id' => 1,
                'amount' => 15,
                'deleted_at' => NULL,
                'created_at' => '2019-07-31 17:58:44',
                'updated_at' => '2019-07-31 21:07:49',
            ),
        ));
        
        
    }
}