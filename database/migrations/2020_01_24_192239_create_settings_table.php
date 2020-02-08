<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('logo1');
            $table->string('logo2');
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 10, 7);
            $table->text('address');
            $table->string('telephone');
            $table->string('central');
            $table->string('fax');
            $table->string('postal_code');
            $table->string('email');
            $table->text('about');
            $table->text('terms');
            $table->string('facebook');
            $table->string('googleplus');
            $table->string('youtube');
            $table->string('twitter');
            $table->string('telegram');
            $table->string('whatsapp');
            $table->string('snapchat');
            $table->string('linkedin');
            $table->string('play_store');
            $table->string('app_store');
            $table->string('microsoft_store');
            $table->string('qr_code');
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
        Schema::dropIfExists('settings');
    }
}
