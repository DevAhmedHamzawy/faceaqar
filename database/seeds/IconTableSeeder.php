<?php

use Illuminate\Database\Seeder;

class IconTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
        ['place' => 'header1', 'name' => 'الرئيسية', 'icon' => 'home.png'],
        ['place' => 'header1', 'name' => 'تسجيل الدخول', 'icon' => 'login.png'],
        ['place' => 'header1', 'name' => 'دخول المكاتب العقارية', 'icon' => 'about.png'],
        ['place' => 'header1', 'name' => 'دخول الأعضاء', 'icon' => 'loginaug.png'],
        ['place' => 'header1', 'name' => 'تسجيل جديد', 'icon' => 'reg.png'],
        ['place' => 'header1', 'name' => 'الإشتراك', 'icon' => 'sub.png'],
        ['place' => 'header1', 'name' => 'من نحن', 'icon' => 'how.png'],
        ['place' => 'header1', 'name' => 'اتصل بنا', 'icon' => 'contact.png'],
        ['place' => 'header1', 'name' => 'التقويم', 'icon' => 'date.png'],

        ['place' => 'header2', 'name' => 'خدماتنا', 'icon' => 'services.png'],
        ['place' => 'header2', 'name' => 'فروعنا', 'icon' => 'loction.png'],
        ['place' => 'header2', 'name' => 'عملائنا', 'icon' => 'custmoer.png'],
        ['place' => 'header2', 'name' => 'أعمالنا', 'icon' => 'portfolio.png'],
        ['place' => 'header2', 'name' => 'فريق العمل', 'icon' => 'team.png'],
        ['place' => 'header2', 'name' => 'الرسوم المالية', 'icon' => 'puy.png'],
        ['place' => 'header2', 'name' => 'طرق الدفع', 'icon' => 'search.png'],
        ['place' => 'header2', 'name' => 'البحث', 'icon' => 'search.png'],
        ['place' => 'header2', 'name' => 'تحدث مع الموظف المختص', 'icon' => 'callus.png'],

        ['place' => 'header3', 'name' => 'appstore', 'icon' => 'io.png'],
        ['place' => 'header3', 'name' => 'playstore', 'icon' => 'pl.png'],
        ['place' => 'header3', 'name' => 'microsoftstore', 'icon' => 'mi.png'],        
        ['place' => 'header3', 'name' => 'telegram', 'icon' => 'te.png'],
        ['place' => 'header3', 'name' => 'facebook', 'icon' => 'fb.png'],
        ['place' => 'header3', 'name' => 'twitter', 'icon' => 'tw.png'],
        ['place' => 'header3', 'name' => 'instagram', 'icon' => 'in.png'],
        ['place' => 'header3', 'name' => 'youtube', 'icon' => 'yo.png'],
        ['place' => 'header3', 'name' => 'linkedin', 'icon' => 'li.png'],
        ['place' => 'header3', 'name' => 'google', 'icon' => 'go.png'],
        ['place' => 'header3', 'name' => 'whatsapp', 'icon' => 'wh.png'],
        ['place' => 'header3', 'name' => 'snapchat', 'icon' => 'sn.png'],

        ['place' => 'footer', 'name' => 'appstore', 'icon' => 'appios.png'],
        ['place' => 'footer', 'name' => 'playstore', 'icon' => 'playand.png'],
        ['place' => 'footer', 'name' => 'microsoftstore', 'icon' => 'winapp.png'],
        ['place' => 'footer', 'name' => 'barcode', 'icon' => 'barcode.png'],
        
        ['place' => 'footer-payment', 'name' => '1', 'icon' => 'img123.png'],
        ['place' => 'footer-payment', 'name' => '2', 'icon' => 'img123.png'],
        ['place' => 'footer-payment', 'name' => '3', 'icon' => 'img123.png'],
        ['place' => 'footer-payment', 'name' => '4', 'icon' => 'img123.png'],
        ['place' => 'footer-payment', 'name' => '5', 'icon' => 'img123.png'],
        ['place' => 'footer-payment', 'name' => '6', 'icon' => 'img123.png'],
        ['place' => 'footer-payment', 'name' => '7', 'icon' => 'img123.png'],
        ['place' => 'footer-payment', 'name' => '8', 'icon' => 'img123.png'],
        ['place' => 'footer-payment', 'name' => '9', 'icon' => 'img123.png'],
        ['place' => 'footer-payment', 'name' => '10', 'icon' => 'img123.png'],
        ['place' => 'footer-payment', 'name' => '11', 'icon' => 'img123.png'],
        ['place' => 'footer-payment', 'name' => '12', 'icon' => 'img123.png'],

        ]);
    }
}
