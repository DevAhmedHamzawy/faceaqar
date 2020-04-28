<?php

use App\Duration;
use Illuminate\Database\Seeder;

class DurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('durations')->insert([
            ['name' => 'شهر', 'number' => '30'],
            ['name' => 'شهور 3', 'number' => '90'],
            ['name' => 'شهور 6', 'number' => '180'],
            ['name' => 'سنة', 'number' => '365']
        ]);
    }
}
