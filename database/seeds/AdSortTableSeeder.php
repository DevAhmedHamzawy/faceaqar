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
            ['name' => 'local_estate' , 'display' => 'عقار محلى' , 'title' => 'العقار المحلى' , 'adjective' => 'العقارات المحلية'],
            ['name' => 'global_estate' , 'display' => 'عقار دولى', 'title' => 'العقار الدولى' , 'adjective' => 'العقارات الدولية'],
            ['name' => 'schema_estate' , 'display' => 'مخطط عقارى', 'title' => 'المخطط العقارى' , 'adjective' => 'المخططات العقارية'],
            ['name' => 'project_estate' , 'display' => 'مشروع عقارى', 'title' => 'المشروع العقارى', 'adjective' => 'المشاريع العقارية'],
            ['name' => 'request_estate' , 'display' => 'طلب عقارى', 'title' => 'الطلب العقارى', 'adjective' => 'الطلبات العقارية'],
            ['name' => 'auction_estate' , 'display' => 'مزاد عقارى', 'title' => 'المزاد العقارى', 'adjective' => 'المزادات العقارية'],
        ]);
    }
}
