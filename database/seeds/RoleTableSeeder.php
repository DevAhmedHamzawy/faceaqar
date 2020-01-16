<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'estate_office', 'display_name' => 'مكتب عقارى'],
            ['name' => 'estate_agency', 'display_name' => 'وكالة عقارية'],
            ['name' => 'estate_company', 'display_name' => 'شركة عقارية'],
            ['name' => 'estate_auction_office', 'display_name' => 'مكتب مزاد عقارى'],
            ['name' => 'engineering_office', 'display_name' => 'مكتب هندسى'],
            ['name' => 'owner', 'display_name' => 'مالك'],
            ['name' => 'middleware', 'display_name' => 'وسيط'],
            ['name' => 'other', 'display_name' => 'اخرى'],
        ]);
    }
}
