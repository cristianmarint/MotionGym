<?php

use Illuminate\Database\Seeder;

class PaymentMethodTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_method')->delete();
        
        \DB::table('payment_method')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Cash',
                'description' => 'Cash',
                'deleted_at' => NULL,
                'created_at' => '2019-07-31 15:39:37',
                'updated_at' => '2019-07-31 15:39:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'PayPal',
                'description' => 'E-cash',
                'deleted_at' => NULL,
                'created_at' => '2019-07-31 15:40:07',
                'updated_at' => '2019-07-31 15:40:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'PayPal',
                'description' => 'E-Cash',
                'deleted_at' => '2019-07-31 15:40:33',
                'created_at' => '2019-07-31 15:40:14',
                'updated_at' => '2019-07-31 15:40:33',
            ),
        ));
        
        
    }
}