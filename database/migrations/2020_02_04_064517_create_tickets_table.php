<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('membership_id');
            $table->enum('sort', ['estate','broker','brokerimage']);
            $table->bigInteger('user_id');
            $table->bigInteger('estate_id')->nullable();
            $table->bigInteger('broker_id')->nullable();
            $table->text('payment_data');
            $table->boolean('payment_approval')->default(0);
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
        Schema::dropIfExists('tickets');
    }
}
