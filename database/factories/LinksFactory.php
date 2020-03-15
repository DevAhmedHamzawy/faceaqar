<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Links;
use App\Page;
use Faker\Generator as Faker;

$factory->define(Links::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        //'parent_id' => function(){ return Links::wherePlace('menu1')->get()->random()->id; },
        'page_id' => function(){ return Page::all()->random()->id; },
        'place' => 'footer3',
        'position' => $faker->numberBetween(1,20),
        'visible' => $faker->numberBetween(0,1),
    ];
});
