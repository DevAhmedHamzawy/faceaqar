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
            ['name' => '15 يوم'],
            ['name' => 'شهر'],
            ['name' => '3 شهور'],
            ['name' => '6 شهور'],
            ['name' => 'سنة']
        ]);
    }
}
