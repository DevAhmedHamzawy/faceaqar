<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('area_id');
            $table->integer('code');
            $table->string('center')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('street')->nullable();
            $table->text('address')->nullable();
            $table->string('full_name')->nullable();
            $table->string('national_identity_img')->nullable();
            $table->string('commercial_register_img')->nullable();
            $table->string('office_name')->nullable();
            $table->text('office_activity')->nullable();
            $table->integer('commercial_register_no')->nullable();
            $table->string('youtube_video_link')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('snapchat')->nullable();
            $table->text('description')->nullable();
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('lng', 10, 7)->nullable();
            $table->string('mobile1')->nullable();
            $table->string('mobile2')->nullable();
            $table->string('telephone')->nullable();
            $table->string('fax')->nullable();
            $table->string('central')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
