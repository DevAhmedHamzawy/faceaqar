<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('ad_sort_id');
            $table->integer('area_id');
            $table->integer('category_id')->nullable();
            $table->integer('sort_id')->nullable();
            $table->integer('offer_id')->nullable();
            $table->integer('premium_id')->nullable();
            $table->integer('duration_id');
            $table->boolean('visible');
            $table->boolean('premium_approval')->default(0);
            $table->integer('code');
            $table->string('center')->nullable();
            $table->string('neighborhood');
            $table->string('street')->nullable();
            $table->text('address')->nullable();
            $table->string('name');
            $table->string('youtube')->nullable();
            $table->longText('description')->nullable();
            $table->longText('more_description')->nullable();
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 10, 7);
            $table->boolean('blacklist')->default(0);
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
        Schema::dropIfExists('estates');
    }
}
