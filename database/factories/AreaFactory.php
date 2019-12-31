<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Area;
use Faker\Generator as Faker;

$factory->define(Area::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'position' => $faker->numberBetween(1,100),
        'visible' => $faker->numberBetween(0,1),
        'parent_id' => function(){ return Area::all()->random(); },
    ];
});
