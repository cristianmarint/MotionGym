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
        
        
        
    }
}