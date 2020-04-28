<?php

use Illuminate\Database\Seeder;

class PremiumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('premiums')->insert([
            ['name' => '15 يوم', 'number' => '15'],
            ['name' => 'شهر', 'number' => '30'],
            ['name' => '3 شهور', 'number' => '90'],
            ['name' => '6 شهور', 'number' => '180'],
            ['name' => 'سنة', 'number' => '365']
        ]);
    }
}
