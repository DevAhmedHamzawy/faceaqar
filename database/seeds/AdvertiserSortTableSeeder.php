<?php

use Illuminate\Database\Seeder;

class AdvertiserSortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertiser_sort')->insert([
            ['name' => 'مكتب عقارى'],
            ['name' => 'مطور عقارى'],
            ['name' => 'شركة عقارية'],
            ['name' => 'مكتب مزاد عقارى'],
            ['name' => 'مكتب هندسى'],
            ['name' => 'مالك'],
            ['name' => 'وسيط'],
            ['name' => 'اخرى'],
        ]);
    }
}
