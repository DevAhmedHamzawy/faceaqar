<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLawyerContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('mobile');
            $table->string('email');
            $table->text('body');
            $table->string('file')->nullable();
            $table->bigInteger('from')->nullable();
            $table->bigInteger('to')->nullable();
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
        Schema::dropIfExists('lawyer_contacts');
    }
}
