<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offer')->insert([
            ['name' => 'للإيجار'],
            ['name' => 'للإستثمار'],
            ['name' => 'أخرى'],
        ]);
    }
}
