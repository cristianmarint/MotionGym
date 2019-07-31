<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product')->delete();
        
        \DB::table('product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Termos',
                'description' => NULL,
                'purchase_price' => 100.0,
                'sale_price' => 150.0,
                'amount' => 81,
                'deleted_at' => NULL,
                'created_at' => '2019-07-29 18:07:40',
                'updated_at' => '2019-07-31 21:09:40',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'T shirt',
                'description' => NULL,
                'purchase_price' => 30.0,
                'sale_price' => 60.0,
                'amount' => 93,
                'deleted_at' => NULL,
                'created_at' => '2019-07-29 18:09:25',
                'updated_at' => '2019-07-31 21:09:26',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Té de Manzanilla',
                'description' => NULL,
                'purchase_price' => 1.0,
                'sale_price' => 3.0,
                'amount' => 95,
                'deleted_at' => NULL,
                'created_at' => '2019-07-31 15:20:03',
                'updated_at' => '2019-07-31 21:07:05',
            ),
        ));
        
        
    }
}