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
            ['name' => 'شهر'],
            ['name' => 'شهور 3'],
            ['name' => 'شهور 6'],
            ['name' => 'سنة']
        ]);
    }
}
