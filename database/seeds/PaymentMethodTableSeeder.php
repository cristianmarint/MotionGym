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
        
        
        
    }
}