<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction_estates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('estate_id');
            $table->integer('destination_id')->nullable();
            $table->integer('price_sort_id')->nullable();
            $table->integer('payment_sort_id')->nullable();
            $table->string('schema_name')->nullable();
            $table->integer('schema_number')->nullable();
            $table->integer('block_number')->nullable();
            $table->integer('piece_number')->nullable();
            $table->enum('streets_number' , ['شارع واحد' , 'شارعين' , '3 شوارع' , '4 شوارع'])->nullable();
            $table->integer('estate_space')->nullable();
            $table->integer('price')->nullable();
            $table->enum('docs' , ['بصك' , 'بدون صك' , 'أخرى'])->nullable();
            $table->enum('delivery_method' , ['فورى' , 'أخرى'])->nullable();
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
            $table->text('internal_services')->nullable();
            $table->text('external_services')->nullable();        
            $table->date('date')->nullable();
            $table->string('hijri_date')->nullable();
            $table->time('time')->nullable();
            $table->text('auction_conditions')->nullable();
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
        Schema::dropIfExists('auction_estates');
    }
}
