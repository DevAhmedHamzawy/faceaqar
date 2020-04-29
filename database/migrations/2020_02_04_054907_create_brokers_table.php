<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brokers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('area_id');
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email');
            //$table->enum('broker_ad_sort', ['صور', 'كتابة نصية', 'حسابات التواصل الإجتماعى', 'الكروت الإعلانية الإلكترونية', 'حجز صفحة إعلانية كاملة'])->nullable();
            $table->string('broker_ad_sort');
            $table->string('file')->nullable();
            $table->enum('dimensions', ['230 x 200', '231 x 201', '232 x 202'])->nullable();
            //$table->enum('color_sort', ['أبيض و أسود', 'ألوان'])->nullable();
            $table->string('color_sort')->nullable();
            $table->string('img_url')->nullable();
            $table->string('account_url')->nullable();
            $table->string('site_url')->nullable();
            $table->string('page_url')->nullable();
            $table->string('commercial_url')->nullable();
            $table->string('comment')->nullable();
            $table->string('account_name')->nullable();
            //$table->enum('account_sort', ['تويتر', 'تلقرام', 'فيس بوك', 'إنستقرام', 'اخرى'])->nullable();
            //$table->enum('account_color_sort', ['عادى', 'ملون'])->nullable();
            $table->string('account_sort')->nullable();
            $table->string('account_color_sort')->nullable();
            $table->text('account_description')->nullable();
            $table->text('description')->nullable();
            $table->text('card_address')->nullable();
            //$table->integer('duration_id')->nullable();
            $table->string('duration_id')->nullable();
            $table->string('youtube')->nullable();
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('lng', 10, 7)->nullable();
            $table->string('telephone')->nullable();
            $table->string('fax')->nullable();
            $table->string('page_widget')->nullable();
            $table->string('commercial_name')->nullable();
            $table->text('commercial_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brokers');
    }
}
