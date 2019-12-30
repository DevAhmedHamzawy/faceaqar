<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'شقة' , 'slug' => str_slug('flat') , 'position' => 1 , 'visible' => 1],
            ['name' => 'أرض' , 'slug' => str_slug('land') , 'position' => 2 , 'visible' => 1],
            ['name' => 'فيلا' , 'slug' => str_slug('villa') , 'position' => 3 , 'visible' => 1],
            ['name' => 'دور' , 'slug' => str_slug('floor') , 'position' => 4 , 'visible' => 1],
            ['name' => 'عمارة' , 'slug' => str_slug('building') , 'position' => 5 , 'visible' => 1],
            ['name' => 'محل' , 'slug' => str_slug('shop') , 'position' => 6 , 'visible' => 1],
            ['name' => 'بيت' , 'slug' => str_slug('house') , 'position' => 7 , 'visible' => 1],
            ['name' => 'إستراحة' , 'slug' => str_slug('rest') , 'position' => 8 , 'visible' => 1],
            ['name' => 'مزرعة' , 'slug' => str_slug('farm') , 'position' => '9' , 'visible' => 1],
            ['name' => 'مكتب تجارى' , 'slug' => str_slug('commercial office') , 'position' => '10' , 'visible' => 1],
            ['name' => 'مستودع' , 'slug' => str_slug('repository') , 'position' => '11' , 'visible' => 1],
            ['name' => 'مخيم'  , 'slug' => str_slug('camp') , 'position' => '12' , 'visible' => 1],
            ['name' => 'غرفة' , 'slug' => str_slug('room') , 'position' => '13' , 'visible' => 1],
            ['name' => 'فندق' , 'slug' => str_slug('hotel') , 'position' => '14', 'visible' => 1]
        ]);
    }
}
