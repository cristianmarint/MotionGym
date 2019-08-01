<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('service')->delete();
        
        \DB::table('service')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'GYM MEMBERSHIP',
                'photo' => 'service\\August2019\\dGVjiLoo1l1Uew283HqA.jpg',
                'description' => '<p>The gym is accessible 5am-11pm, 365 Days a year with a gym access card/membership.<br />We offer treadmills, Concept 2 Rowing Machines, Indoor Cycling Bikes,&nbsp; Free Weights,<br />Squat Rack/Cage, Barbells &amp; Bumper Plates, All In One Cable Machine, Boxes, TRXs, and more!</p>',
                'price' => '24.00',
                'deleted_at' => NULL,
                'created_at' => '2019-08-01 18:32:31',
                'updated_at' => '2019-08-01 18:32:31',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'PERSONAL TRAINING',
                'photo' => 'service\\August2019\\3m4KzuwFk6Tpx80WUEGs.jpg',
                'description' => '<p>We have three professional trainers on staff to help U reach your goals!<br />We analyze your goals and needs and create a plan tailored to U.</p>',
                'price' => '60.00',
                'deleted_at' => NULL,
                'created_at' => '2019-08-01 18:52:05',
                'updated_at' => '2019-08-01 19:15:28',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'KIDS\' ZONE',
                'photo' => 'service\\August2019\\a20ucTItWijnKxDxgrZR.jpg',
            'description' => '<p>No more juggling! Your child (ages 2-10) can hangout while U workout!<br />Kids are cared for and entertained with crafts, toys, and more. They will have fun while you get your sweat on.</p>',
                'price' => '5.00',
                'deleted_at' => NULL,
                'created_at' => '2019-08-01 18:52:40',
                'updated_at' => '2019-08-01 19:12:31',
            ),
        ));
        
        
    }
}