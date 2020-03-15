<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'parent_id' => $faker->numberBetween(131,136),
        'title' => $faker->name,
        'body' => $faker->paragraph(3),
    ];
});
