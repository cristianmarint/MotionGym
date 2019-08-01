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
                'email' => 'cristianmarint@motion.gym',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zjqQJ.UQoo2kjGSJ6MrjXOvTrWISvnhHn0MfFW8eWjg.i31x1Zkdu',
                'remember_token' => 'FQKOvqNP6pMtiCFa5cxYIZv8E0nksv7jBdoETYc2NkVxJ6TE0UdCXg8O4ld8',
                'settings' => '{"locale":"en"}',
                'deleted_at' => NULL,
                'created_at' => '2019-07-24 21:28:15',
                'updated_at' => '2019-08-01 20:52:12',
                'person_id' => NULL,
            ),
        ));
        
        
    }
}