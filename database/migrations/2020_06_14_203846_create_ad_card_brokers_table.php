<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdCardBrokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_card_brokers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('broker_id');
            $table->string('name');
            $table->text('body');
            $table->text('address');
            $table->string('url');
            $table->enum('sort', ['تويتر', 'تلقرام', 'فيس بوك', 'إنستقرام', 'اخرى']);
            $table->string('account_url');
            $table->string('youtube_url');
            $table->text('comment');
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 10, 7);
            $table->string('mobile');
            $table->string('telephone');
            $table->string('fax');
            $table->string('email');
            $table->integer('premium_id');
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
        Schema::dropIfExists('ad_card_brokers');
    }
}
