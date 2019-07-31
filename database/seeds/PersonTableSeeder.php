<?php

use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('person')->delete();
        
        \DB::table('person')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status' => 'Active',
                'identification' => '1681651',
                'identification_type' => 'officialidentification',
                'photo' => NULL,
                'name' => 'Pepe',
                'middle_name' => 'El',
                'first_surname' => 'Comprador',
                'second_surname' => NULL,
                'blood_group_rh' => 'A+',
                'insurance_company_id' => NULL,
                'city_birth_id' => NULL,
                'birthdate' => '2019-07-10',
                'address' => 'dsada +64894',
                'email' => 'sdasd@gmail.com',
                'phone' => '566841615',
                'gender' => 'Male',
                'deleted_at' => NULL,
                'created_at' => '2019-07-29 18:14:57',
                'updated_at' => '2019-07-31 22:11:19',
            ),
        ));
        
        
    }
}