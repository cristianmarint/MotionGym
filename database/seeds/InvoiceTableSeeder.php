<?php

use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('invoice')->delete();
        
        \DB::table('invoice')->insert(array (
            0 => 
            array (
                'id' => 1,
                'client_person_id' => NULL,
                'seller_user_id' => 1,
                'payment_method_id' => 1,
                'status' => '1',
                'total' => 1687.5,
                'deleted_at' => NULL,
                'created_at' => '2019-06-28 00:00:00',
                'updated_at' => '2019-08-01 03:43:04',
            ),
            1 => 
            array (
                'id' => 2,
                'client_person_id' => NULL,
                'seller_user_id' => 1,
                'payment_method_id' => NULL,
                'status' => '1',
                'total' => 0.0,
                'deleted_at' => NULL,
                'created_at' => '2019-07-28 00:00:00',
                'updated_at' => '2019-08-01 03:42:44',
            ),
            2 => 
            array (
                'id' => 3,
                'client_person_id' => 1,
                'seller_user_id' => 1,
                'payment_method_id' => 1,
                'status' => '1',
                'total' => 15.0,
                'deleted_at' => NULL,
                'created_at' => '2019-07-30 13:25:39',
                'updated_at' => '2019-07-31 21:09:00',
            ),
            3 => 
            array (
                'id' => 4,
                'client_person_id' => NULL,
                'seller_user_id' => NULL,
                'payment_method_id' => NULL,
                'status' => '1',
                'total' => 405.0,
                'deleted_at' => NULL,
                'created_at' => '2019-07-30 13:33:36',
                'updated_at' => '2019-07-31 21:09:26',
            ),
            4 => 
            array (
                'id' => 5,
                'client_person_id' => NULL,
                'seller_user_id' => NULL,
                'payment_method_id' => NULL,
                'status' => '1',
                'total' => 126.0,
                'deleted_at' => NULL,
                'created_at' => '2019-07-30 13:34:43',
                'updated_at' => '2019-07-31 21:09:17',
            ),
            5 => 
            array (
                'id' => 6,
                'client_person_id' => NULL,
                'seller_user_id' => NULL,
                'payment_method_id' => NULL,
                'status' => '1',
                'total' => 75.0,
                'deleted_at' => NULL,
                'created_at' => '2019-08-01 01:59:17',
                'updated_at' => '2019-08-01 15:18:27',
            ),
        ));
        
        
    }
}