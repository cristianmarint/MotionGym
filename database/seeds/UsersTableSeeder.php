<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Cristian Marin',
                'email' => 'cristianmarint@motiongym.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2019-07-24 21:28:15',
                'password' => '$2y$10$hw4IBGx.OIwc6BRv1I9Rn.a9PhIdiwoIBpbR4MUIDSZEruV.Z5vhG',
                'remember_token' => NULL,
                'settings' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2019-07-24 21:28:15',
                'updated_at' => '2019-07-24 21:28:16',
                'person_id' => NULL,
            ),
        ));
        
        
    }
}