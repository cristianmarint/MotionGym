<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-01 21:20:53
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-25 11:18:59
 * @ Description:
 */


use Illuminate\Database\Seeder;

class BasicSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Motion Gym',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'A ready to install gym admin panel.',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'MG Panel',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Welcome to your Admin. Panel.',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'company.address',
                'display_name' => 'Address',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 6,
                'group' => 'Company',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'company.phone.primary',
                'display_name' => 'Phone Primary',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text_area',
                'order' => 7,
                'group' => 'Company',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'company.phone.secondary',
                'display_name' => 'Phone Secondary',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text_area',
                'order' => 8,
                'group' => 'Company',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'company.email.contact',
                'display_name' => 'Contact Email',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text_area',
                'order' => 9,
                'group' => 'Company',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'company.history',
                'display_name' => 'History of the company',
                'value' => NULL,
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 10,
                'group' => 'Company',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'company.vision',
                'display_name' => 'Company vision',
                'value' => NULL,
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 11,
                'group' => 'Company',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'company.mision',
                'display_name' => 'Company mision',
                'value' => NULL,
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 12,
                'group' => 'Company',
            ),
        ));
        
        
    }
}