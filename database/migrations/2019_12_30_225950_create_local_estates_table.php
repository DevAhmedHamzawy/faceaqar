<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_estates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('estate_id');
            $table->integer('destination_id');
            $table->integer('price_sort_id');
            $table->integer('payment_sort_id');
            $table->string('schema_name');
            $table->integer('schema_number');
            $table->integer('block_number');
            $table->integer('piece_number');
            $table->enum('streets_number' , ['شارع واحد' , 'شارعين' , '3 شوارع' , '4 شوارع']);
            $table->integer('estate_space');
            $table->integer('price');
            $table->enum('docs' , ['بصك' , 'بدون صك' , 'أخرى']);
            $table->enum('delivery_method' , ['فورى' , 'أخرى']);
            $table->integer('building_space')->nullable();
            $table->enum('building_design' , ['0' , '00' , '000'])->nullable();
            $table->integer('age')->nullable();
            $table->integer('floors_number')->nullable();
            $table->integer('units_number')->nullable();
            $table->integer('floor_number')->nullable();
            $table->integer('unit_number')->nullable();
            $table->integer('rooms_number')->nullable();
            $table->integer('receptions_number')->nullable();
            $table->integer('kitchens_number')->nullable();
            $table->integer('stores_number')->nullable();
            $table->integer('bathrooms_number')->nullable();
            $table->integer('lifts_number')->nullable();
            $table->enum('floor_tanks_sort', ['نوع' , 'نوع اخر'])->nullable();
            $table->enum('overhead_tanks_sort' , ['نوع' , 'نوع اخر'])->nullable();
            $table->enum('basement' , ['يوجد' , 'لا يوجد'])->nullable();
            $table->enum('parking' , ['يوجد' , 'لا يوجد'])->nullable();
            $table->enum('electricity_network' , ['يوجد' , 'لا يوجد'])->nullable();
            $table->enum('water_network' , ['يوجد' , 'لا يوجد'])->nullable();
            $table->enum('gas_network' , ['يوجد' , 'لا يوجد'])->nullable();
            $table->enum('sewerage_network' , ['يوجد' , 'لا يوجد'])->nullable();   
            $table->text('internal_services');
            $table->text('external_services'); 
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
        Schema::dropIfExists('local_estates');
    }
}
