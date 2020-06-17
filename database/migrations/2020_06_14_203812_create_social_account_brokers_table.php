<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialAccountBrokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_account_brokers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('broker_id');
            $table->string('name');
            $table->enum('sort', ['تويتر', 'تلقرام', 'فيس بوك', 'إنستقرام', 'اخرى']);
            $table->enum('color_sort', ['أبيض وأسود', 'ملون']);
            $table->string('url');
            $table->text('body');
            $table->text('comment');
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
        Schema::dropIfExists('social_account_brokers');
    }
}
