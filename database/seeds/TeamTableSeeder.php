<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            ['user_id' => 1],
            ['user_id' => 20],
            ['user_id' => 15],
            ['user_id' => 30],
            ['user_id' => 33],
            ['user_id' => 34],
            ['user_id' => 35],
            ['user_id' => 36],
            ['user_id' => 37],
            ['user_id' => 38],
            ['user_id' => 39],
            ['user_id' => 40],
            ['user_id' => 41],
        ]);
    }
}
