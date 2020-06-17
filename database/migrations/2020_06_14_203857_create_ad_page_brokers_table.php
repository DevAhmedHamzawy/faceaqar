<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdPageBrokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_page_brokers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('broker_id');
            $table->string('file');
            $table->enum('page_widget', ['الرئيسية', 'فوتر']);
            $table->enum('color_sort', ['عادى', 'ملون']);
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
        Schema::dropIfExists('ad_page_brokers');
    }
}
