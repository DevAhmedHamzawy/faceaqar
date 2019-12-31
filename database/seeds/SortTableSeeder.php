<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sort')->insert([
            ['name' => 'سكنى'],
            ['name' => 'تجارى'],
            ['name' => 'سكنى تجارى'],
            ['name' => 'زراعى'],
            ['name' => 'أخرى'],
        ]);
    }
}
