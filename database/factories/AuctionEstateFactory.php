<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AuctionEstate;
use App\Estate;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(AuctionEstate::class, function (Faker $faker) {
    return [
        'estate_id' => function(){ return Estate::all()->random(); },
        'destination_id' => function(){ return DB::table('destination')->get()->random()->id; },
        'price_sort_id' => function(){ return DB::table('price_sort')->get()->random()->id; },
        'payment_sort_id' => function(){ return DB::table('payment_sort')->get()->random()->id; },
        'schema_name' => $faker->name,
        'schema_number' => $faker->numberBetween(1,2000),
        'block_number' => $faker->numberBetween(1,2000),
        'piece_number' => $faker->numberBetween(1,2000),
        'streets_number' => $faker->randomElement(['شارع واحد' , 'شارعين' , '3 شوارع' , '4 شوارع']),
        'estate_space' => $faker->numberBetween(1,2000),
        'price' => $faker->numberBetween(1,2000),
        'docs' => $faker->randomElement(['بصك' , 'بدون صك' , 'أخرى']),
        'delivery_method' => $faker->randomElement(['فورى' , 'أخرى']),
        'building_space' => $faker->numberBetween(1,2000),
        'building_design' => $faker->randomElement(['0' , '00' , '000']),
        'age' => $faker->numberBetween(1,100),
        'floors_number' => $faker->numberBetween(1,100),
        'units_number' => $faker->numberBetween(1,100),
        'floor_number' => $faker->numberBetween(1,100),
        'unit_number' => $faker->numberBetween(1,100),
        'rooms_number' => $faker->numberBetween(1,100),
        'receptions_number' => $faker->numberBetween(1,100),
        'kitchens_number' => $faker->numberBetween(1,100),
        'stores_number' => $faker->numberBetween(1,100),
        'bathrooms_number' => $faker->numberBetween(1,100),
        'lifts_number' => $faker->numberBetween(1,100),
        'floor_tanks_sort' => $faker->randomElement(['نوع' , 'نوع اخر']),
        'overhead_tanks_sort' => $faker->randomElement(['نوع' , 'نوع اخر']),
        'basement' => $faker->randomElement(['يوجد' , 'لا يوجد']),
        'parking' => $faker->randomElement(['يوجد' , 'لا يوجد']),
        'electricity_network' => $faker->randomElement(['يوجد' , 'لا يوجد']),
        'water_network' => $faker->randomElement(['يوجد' , 'لا يوجد']),
        'gas_network' => $faker->randomElement(['يوجد' , 'لا يوجد']),
        'sewerage_network' => $faker->randomElement(['يوجد' , 'لا يوجد']),
        'internal_services' => $faker->paragraph(3),
        'external_services' => $faker->paragraph(3),
        'date' => $faker->date,
        'hijri_date' => $faker->date,
        'time' => $faker->time,
        'auction_conditions' => $faker->paragraph(3),
    ];
});
