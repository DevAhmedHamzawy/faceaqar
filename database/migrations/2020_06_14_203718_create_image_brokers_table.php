<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageBrokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_brokers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('broker_id');
            $table->enum('dimensions', ['230 x 200', '231 x 201', '232 x 202']);
            $table->enum('color_sort', ['أبيض وأسود', 'ملون']);
            $table->string('url');
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
        Schema::dropIfExists('image_brokers');
    }
}
