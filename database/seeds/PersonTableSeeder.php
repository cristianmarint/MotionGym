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
                'status' => 'Inactive',
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
                'updated_at' => '2019-08-01 14:30:59',
            ),
            1 => 
            array (
                'id' => 2,
                'status' => 'Active',
                'identification' => '956381102',
                'identification_type' => 'officialidentification',
                'photo' => NULL,
                'name' => 'Juana',
                'middle_name' => 'Andrea',
                'first_surname' => 'Lopez',
                'second_surname' => NULL,
                'blood_group_rh' => 'B+',
                'insurance_company_id' => NULL,
                'city_birth_id' => NULL,
                'birthdate' => '2019-08-01',
                'address' => '2784 f8g4f98g4d',
                'email' => 'juana@mail.com',
                'phone' => NULL,
                'gender' => 'Female',
                'deleted_at' => NULL,
                'created_at' => '2019-08-01 14:23:12',
                'updated_at' => '2019-08-01 15:18:27',
            ),
        ));
        
        
    }
}