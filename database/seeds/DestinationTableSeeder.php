<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destination')->insert([
            ['name' => 'شمال'],
            ['name' => 'جنوب'],
            ['name' => 'شرق'],
            ['name' => 'غرب'],
            ['name' => 'شمال شرق'],
            ['name' => 'شمال غرب'],
            ['name' => 'جنوب شرق'],
            ['name' => 'جنوب غرب'],
        ]);
    }
}
