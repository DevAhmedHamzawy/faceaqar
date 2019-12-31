<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('price_sort')->insert([
            ['name' => 'على السوم'],
            ['name' => 'قابل للتفاوض'],
            ['name' => 'أخرى'],
        ]);
    }
}
