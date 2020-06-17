<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextBrokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_brokers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('broker_id');
            $table->text('comment');
            $table->enum('color_sort', ['أبيض و أسود', 'ملون']);
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
        Schema::dropIfExists('text_brokers');
    }
}
