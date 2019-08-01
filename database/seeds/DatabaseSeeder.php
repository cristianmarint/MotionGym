<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-01 20:57:41
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-31 19:50:23
 * @ Description:
 */


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        
        // Basic Settings & Dummy data (DO NOT USE VOYAGER ONES DUE TO LOSE IN DATA)
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);
        $this->call(ExtraTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(InsuranceCompanyTableSeeder::class);
        $this->call(PersonTableSeeder::class);
        $this->call(InvoiceTableSeeder::class);
        $this->call(DetailTableSeeder::class);
        $this->call(ProductCategoryTableSeeder::class);
        $this->call(RefundTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(MembershipTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
    }
}
