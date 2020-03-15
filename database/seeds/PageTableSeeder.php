<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            ['icon' => 'mark1.png' , 'title' => 'الصفحات العقارية الالكترونية' , 'body' => 'body'],
            ['icon' => 'mark2.png' , 'title' => 'وسيط واجهة العقار الالكتروني' , 'body' => 'body'],
            ['icon' => 'mark3.png' , 'title' => 'التثبيت الاعلاني الالكتروني' , 'body' => 'body'],
            ['icon' => 'mark4.png' , 'title' => 'الرسائل الاعلانية الالكترونية' , 'body' => 'body'],
            ['icon' => 'rightgov.png' , 'title' => 'البرامج الحكومية الالكترونية' , 'body' => 'body'],
            ['icon' => 'leftgov.png' , 'title' => 'برامج السلامة للمنشئات' , 'body' => 'body'],
        ]);
    }
}
