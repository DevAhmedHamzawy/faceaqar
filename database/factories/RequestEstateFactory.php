<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estate;
use App\RequestEstate;
use Faker\Generator as Faker;

$factory->define(RequestEstate::class, function (Faker $faker) {
    return [
        'estate_id' => function(){ return Estate::all()->random(); },
        'rooms_number' => $faker->numberBetween(1,50),
        'bathrooms_number' => $faker->numberBetween(1,50),
        'space' => $faker->numberBetween(1,1000),
        'price' => $faker->numberBetween(1,1000),
    ];
});
