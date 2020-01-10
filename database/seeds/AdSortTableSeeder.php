<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdSortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ad_sort')->insert([
            ['name' => 'local_estate' , 'display' => 'عقار محلى' , 'title' => 'العقار المحلى'],
            ['name' => 'global_estate' , 'display' => 'عقار دولى', 'title' => 'العقار الدولى'],
            ['name' => 'schema_estate' , 'display' => 'مخطط عقارى', 'title' => 'المخطط العقارى'],
            ['name' => 'project_estate' , 'display' => 'مشروع عقارى', 'title' => 'المشروع العقارى'],
            ['name' => 'request_estate' , 'display' => 'طلب عقارى', 'title' => 'الطلب العقارى'],
            ['name' => 'auction_estate' , 'display' => 'مزاد عقارى', 'title' => 'المزاد العقارى'],
        ]);
    }
}
