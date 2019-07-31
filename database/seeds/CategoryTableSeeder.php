<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bebidas',
                'description' => NULL,
                'parent_category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 20:05:28',
                'updated_at' => '2019-07-29 18:08:04',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ropa',
                'description' => NULL,
                'parent_category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 20:05:46',
                'updated_at' => '2019-07-29 18:08:20',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Camisa',
                'description' => NULL,
                'parent_category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2019-07-26 20:06:05',
                'updated_at' => '2019-07-29 18:08:41',
            ),
        ));
        
        
    }
}