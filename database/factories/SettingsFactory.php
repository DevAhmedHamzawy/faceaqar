<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'logo1' => $faker->url,
        'logo2' => $faker->url,
        'lat' => $faker->latitude($min = -90, $max = 90),
        'lng' => $faker->longitude($min = -180, $max = 180),
        'address' => $faker->address,
        'telephone' => $faker->e164PhoneNumber(),
        'central' => $faker->e164PhoneNumber(),
        'fax' => $faker->e164PhoneNumber(),
        'postal_code' => $faker->numberBetween(1,50),
        'email' => $faker->email,
        'about' => $faker->paragraph(3),
        'terms' => $faker->paragraph(3),
    ];
});
