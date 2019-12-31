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
            ['name' => 'local_estate' , 'display' => 'عقار محلى'],
            ['name' => 'global_estate' , 'display' => 'عقار دولى'],
            ['name' => 'schema_estate' , 'display' => 'مخطط عقارى'],
            ['name' => 'project_estate' , 'display' => 'مشروع عقارى'],
            ['name' => 'request_estate' , 'display' => 'طلب عقارى'],
            ['name' => 'auction_estate' , 'display' => 'مزاد عقارى'],
        ]);
    }
}
