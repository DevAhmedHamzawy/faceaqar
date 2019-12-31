<?php

use Illuminate\Database\Seeder;

class PaymentSortTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_sort')->insert([
            ['name' => 'نقدا'],
            ['name' => 'أقساط شهرية'],
            ['name' => 'على دفعات'],
            ['name' => 'شيك مصدق'],
            ['name' => 'أخرى'],
        ]);
    }
}
