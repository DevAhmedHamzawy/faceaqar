<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Message;
use App\User;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mobile' => $faker->e164PhoneNumber(),
        'email' => $faker->email,
        'body' => $faker->paragraph(3),
        'from' => function(){ return User::all()->random()->id; },
        'to' => function(){ return User::all()->random()->id; }
    ];
});
