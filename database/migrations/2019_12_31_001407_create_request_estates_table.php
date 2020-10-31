<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_estates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('estate_id');
            $table->integer('rooms_number')->nullable();
            $table->integer('bathrooms_number')->nullable();
            $table->integer('estate_space')->nullable();
            $table->integer('price')->nullable();
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
        Schema::dropIfExists('request_estates');
    }
}
