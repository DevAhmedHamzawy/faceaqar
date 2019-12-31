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
            $table->integer('code');
            $table->integer('ad_sort_id');
            $table->integer('area_id');
            $table->integer('category_id');
            $table->integer('sort_id');
            $table->integer('offer_id');
            $table->integer('premium_id')->nullable();
            $table->integer('duration_id');
            $table->string('center');
            $table->string('neighborhood');
            $table->string('street');
            $table->text('address');
            $table->string('name');
            $table->string('youtube');
            $table->longText('description');
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 10, 7);
            $table->integer('views')->default(0);
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
