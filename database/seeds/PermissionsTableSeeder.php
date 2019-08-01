<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-07-26 04:55:55',
                'updated_at' => '2019-07-26 04:55:55',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-07-26 04:55:55',
                'updated_at' => '2019-07-26 04:55:55',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-07-26 04:55:55',
                'updated_at' => '2019-07-26 04:55:55',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-07-26 04:55:56',
                'updated_at' => '2019-07-26 04:55:56',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-07-26 04:55:57',
                'updated_at' => '2019-07-26 04:55:57',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-07-26 04:55:57',
                'updated_at' => '2019-07-26 04:55:57',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-07-26 04:55:57',
                'updated_at' => '2019-07-26 04:55:57',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-07-26 04:55:57',
                'updated_at' => '2019-07-26 04:55:57',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-07-26 04:55:57',
                'updated_at' => '2019-07-26 04:55:57',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_category',
                'table_name' => 'category',
                'created_at' => '2019-07-26 04:58:43',
                'updated_at' => '2019-07-26 04:58:43',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_category',
                'table_name' => 'category',
                'created_at' => '2019-07-26 04:58:43',
                'updated_at' => '2019-07-26 04:58:43',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_category',
                'table_name' => 'category',
                'created_at' => '2019-07-26 04:58:43',
                'updated_at' => '2019-07-26 04:58:43',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_category',
                'table_name' => 'category',
                'created_at' => '2019-07-26 04:58:43',
                'updated_at' => '2019-07-26 04:58:43',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_category',
                'table_name' => 'category',
                'created_at' => '2019-07-26 04:58:43',
                'updated_at' => '2019-07-26 04:58:43',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_discount',
                'table_name' => 'discount',
                'created_at' => '2019-07-26 13:02:26',
                'updated_at' => '2019-07-26 13:02:26',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_discount',
                'table_name' => 'discount',
                'created_at' => '2019-07-26 13:02:26',
                'updated_at' => '2019-07-26 13:02:26',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_discount',
                'table_name' => 'discount',
                'created_at' => '2019-07-26 13:02:26',
                'updated_at' => '2019-07-26 13:02:26',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_discount',
                'table_name' => 'discount',
                'created_at' => '2019-07-26 13:02:26',
                'updated_at' => '2019-07-26 13:02:26',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_discount',
                'table_name' => 'discount',
                'created_at' => '2019-07-26 13:02:26',
                'updated_at' => '2019-07-26 13:02:26',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_person',
                'table_name' => 'person',
                'created_at' => '2019-07-26 13:12:52',
                'updated_at' => '2019-07-26 13:12:52',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_person',
                'table_name' => 'person',
                'created_at' => '2019-07-26 13:12:52',
                'updated_at' => '2019-07-26 13:12:52',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_person',
                'table_name' => 'person',
                'created_at' => '2019-07-26 13:12:52',
                'updated_at' => '2019-07-26 13:12:52',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_person',
                'table_name' => 'person',
                'created_at' => '2019-07-26 13:12:52',
                'updated_at' => '2019-07-26 13:12:52',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_person',
                'table_name' => 'person',
                'created_at' => '2019-07-26 13:12:52',
                'updated_at' => '2019-07-26 13:12:52',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_invoice',
                'table_name' => 'invoice',
                'created_at' => '2019-07-26 14:36:53',
                'updated_at' => '2019-07-26 14:36:53',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_invoice',
                'table_name' => 'invoice',
                'created_at' => '2019-07-26 14:36:53',
                'updated_at' => '2019-07-26 14:36:53',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_invoice',
                'table_name' => 'invoice',
                'created_at' => '2019-07-26 14:36:53',
                'updated_at' => '2019-07-26 14:36:53',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_invoice',
                'table_name' => 'invoice',
                'created_at' => '2019-07-26 14:36:53',
                'updated_at' => '2019-07-26 14:36:53',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_invoice',
                'table_name' => 'invoice',
                'created_at' => '2019-07-26 14:36:53',
                'updated_at' => '2019-07-26 14:36:53',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_extra',
                'table_name' => 'extra',
                'created_at' => '2019-07-26 14:37:56',
                'updated_at' => '2019-07-26 14:37:56',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_extra',
                'table_name' => 'extra',
                'created_at' => '2019-07-26 14:37:56',
                'updated_at' => '2019-07-26 14:37:56',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_extra',
                'table_name' => 'extra',
                'created_at' => '2019-07-26 14:37:56',
                'updated_at' => '2019-07-26 14:37:56',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_extra',
                'table_name' => 'extra',
                'created_at' => '2019-07-26 14:37:56',
                'updated_at' => '2019-07-26 14:37:56',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_extra',
                'table_name' => 'extra',
                'created_at' => '2019-07-26 14:37:56',
                'updated_at' => '2019-07-26 14:37:56',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_refund',
                'table_name' => 'refund',
                'created_at' => '2019-07-26 14:38:44',
                'updated_at' => '2019-07-26 14:38:44',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_refund',
                'table_name' => 'refund',
                'created_at' => '2019-07-26 14:38:44',
                'updated_at' => '2019-07-26 14:38:44',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_refund',
                'table_name' => 'refund',
                'created_at' => '2019-07-26 14:38:44',
                'updated_at' => '2019-07-26 14:38:44',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_refund',
                'table_name' => 'refund',
                'created_at' => '2019-07-26 14:38:44',
                'updated_at' => '2019-07-26 14:38:44',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_refund',
                'table_name' => 'refund',
                'created_at' => '2019-07-26 14:38:44',
                'updated_at' => '2019-07-26 14:38:44',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_payment_method',
                'table_name' => 'payment_method',
                'created_at' => '2019-07-26 14:39:34',
                'updated_at' => '2019-07-26 14:39:34',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_payment_method',
                'table_name' => 'payment_method',
                'created_at' => '2019-07-26 14:39:34',
                'updated_at' => '2019-07-26 14:39:34',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_payment_method',
                'table_name' => 'payment_method',
                'created_at' => '2019-07-26 14:39:34',
                'updated_at' => '2019-07-26 14:39:34',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_payment_method',
                'table_name' => 'payment_method',
                'created_at' => '2019-07-26 14:39:34',
                'updated_at' => '2019-07-26 14:39:34',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_payment_method',
                'table_name' => 'payment_method',
                'created_at' => '2019-07-26 14:39:34',
                'updated_at' => '2019-07-26 14:39:34',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_product',
                'table_name' => 'product',
                'created_at' => '2019-07-26 14:41:20',
                'updated_at' => '2019-07-26 14:41:20',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_product',
                'table_name' => 'product',
                'created_at' => '2019-07-26 14:41:20',
                'updated_at' => '2019-07-26 14:41:20',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_product',
                'table_name' => 'product',
                'created_at' => '2019-07-26 14:41:20',
                'updated_at' => '2019-07-26 14:41:20',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_product',
                'table_name' => 'product',
                'created_at' => '2019-07-26 14:41:20',
                'updated_at' => '2019-07-26 14:41:20',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_product',
                'table_name' => 'product',
                'created_at' => '2019-07-26 14:41:20',
                'updated_at' => '2019-07-26 14:41:20',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_city',
                'table_name' => 'city',
                'created_at' => '2019-07-26 14:42:57',
                'updated_at' => '2019-07-26 14:42:57',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'read_city',
                'table_name' => 'city',
                'created_at' => '2019-07-26 14:42:57',
                'updated_at' => '2019-07-26 14:42:57',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'edit_city',
                'table_name' => 'city',
                'created_at' => '2019-07-26 14:42:57',
                'updated_at' => '2019-07-26 14:42:57',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'add_city',
                'table_name' => 'city',
                'created_at' => '2019-07-26 14:42:57',
                'updated_at' => '2019-07-26 14:42:57',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'delete_city',
                'table_name' => 'city',
                'created_at' => '2019-07-26 14:42:57',
                'updated_at' => '2019-07-26 14:42:57',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'browse_state',
                'table_name' => 'state',
                'created_at' => '2019-07-26 14:44:34',
                'updated_at' => '2019-07-26 14:44:34',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'read_state',
                'table_name' => 'state',
                'created_at' => '2019-07-26 14:44:34',
                'updated_at' => '2019-07-26 14:44:34',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'edit_state',
                'table_name' => 'state',
                'created_at' => '2019-07-26 14:44:34',
                'updated_at' => '2019-07-26 14:44:34',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'add_state',
                'table_name' => 'state',
                'created_at' => '2019-07-26 14:44:34',
                'updated_at' => '2019-07-26 14:44:34',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'delete_state',
                'table_name' => 'state',
                'created_at' => '2019-07-26 14:44:34',
                'updated_at' => '2019-07-26 14:44:34',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'browse_service',
                'table_name' => 'service',
                'created_at' => '2019-07-26 14:45:19',
                'updated_at' => '2019-07-26 14:45:19',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'read_service',
                'table_name' => 'service',
                'created_at' => '2019-07-26 14:45:19',
                'updated_at' => '2019-07-26 14:45:19',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'edit_service',
                'table_name' => 'service',
                'created_at' => '2019-07-26 14:45:19',
                'updated_at' => '2019-07-26 14:45:19',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'add_service',
                'table_name' => 'service',
                'created_at' => '2019-07-26 14:45:19',
                'updated_at' => '2019-07-26 14:45:19',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'delete_service',
                'table_name' => 'service',
                'created_at' => '2019-07-26 14:45:19',
                'updated_at' => '2019-07-26 14:45:19',
            ),
            80 => 
            array (
                'id' => 81,
                'key' => 'browse_insurance_company',
                'table_name' => 'insurance_company',
                'created_at' => '2019-07-26 14:45:52',
                'updated_at' => '2019-07-26 14:45:52',
            ),
            81 => 
            array (
                'id' => 82,
                'key' => 'read_insurance_company',
                'table_name' => 'insurance_company',
                'created_at' => '2019-07-26 14:45:52',
                'updated_at' => '2019-07-26 14:45:52',
            ),
            82 => 
            array (
                'id' => 83,
                'key' => 'edit_insurance_company',
                'table_name' => 'insurance_company',
                'created_at' => '2019-07-26 14:45:52',
                'updated_at' => '2019-07-26 14:45:52',
            ),
            83 => 
            array (
                'id' => 84,
                'key' => 'add_insurance_company',
                'table_name' => 'insurance_company',
                'created_at' => '2019-07-26 14:45:52',
                'updated_at' => '2019-07-26 14:45:52',
            ),
            84 => 
            array (
                'id' => 85,
                'key' => 'delete_insurance_company',
                'table_name' => 'insurance_company',
                'created_at' => '2019-07-26 14:45:52',
                'updated_at' => '2019-07-26 14:45:52',
            ),
            85 => 
            array (
                'id' => 86,
                'key' => 'browse_detail',
                'table_name' => 'detail',
                'created_at' => '2019-07-30 14:47:11',
                'updated_at' => '2019-07-30 14:47:11',
            ),
            86 => 
            array (
                'id' => 87,
                'key' => 'read_detail',
                'table_name' => 'detail',
                'created_at' => '2019-07-30 14:47:11',
                'updated_at' => '2019-07-30 14:47:11',
            ),
            87 => 
            array (
                'id' => 88,
                'key' => 'edit_detail',
                'table_name' => 'detail',
                'created_at' => '2019-07-30 14:47:11',
                'updated_at' => '2019-07-30 14:47:11',
            ),
            88 => 
            array (
                'id' => 89,
                'key' => 'add_detail',
                'table_name' => 'detail',
                'created_at' => '2019-07-30 14:47:11',
                'updated_at' => '2019-07-30 14:47:11',
            ),
            89 => 
            array (
                'id' => 90,
                'key' => 'delete_detail',
                'table_name' => 'detail',
                'created_at' => '2019-07-30 14:47:11',
                'updated_at' => '2019-07-30 14:47:11',
            ),
            90 => 
            array (
                'id' => 91,
                'key' => 'browse_membership',
                'table_name' => 'membership',
                'created_at' => '2019-08-01 00:57:21',
                'updated_at' => '2019-08-01 00:57:21',
            ),
            91 => 
            array (
                'id' => 92,
                'key' => 'read_membership',
                'table_name' => 'membership',
                'created_at' => '2019-08-01 00:57:21',
                'updated_at' => '2019-08-01 00:57:21',
            ),
            92 => 
            array (
                'id' => 93,
                'key' => 'edit_membership',
                'table_name' => 'membership',
                'created_at' => '2019-08-01 00:57:21',
                'updated_at' => '2019-08-01 00:57:21',
            ),
            93 => 
            array (
                'id' => 94,
                'key' => 'add_membership',
                'table_name' => 'membership',
                'created_at' => '2019-08-01 00:57:21',
                'updated_at' => '2019-08-01 00:57:21',
            ),
            94 => 
            array (
                'id' => 95,
                'key' => 'delete_membership',
                'table_name' => 'membership',
                'created_at' => '2019-08-01 00:57:21',
                'updated_at' => '2019-08-01 00:57:21',
            ),
        ));
        
        
    }
}