<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Portfolio;
use Faker\Generator as Faker;

$factory->define(Portfolio::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'img' => $faker->url,
        'date' => $faker->date()
    ];
});
