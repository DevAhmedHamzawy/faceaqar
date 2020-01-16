<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Area;
use App\Profile;
use App\User;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'user_id' => function(){ return User::all()->random()->id; },
        'area_id' => function(){ return Area::all()->random()->id; },
        'center' => $faker->city,
        'neighborhood' => $faker->city,
        'street' => $faker->streetName,
        'address' => $faker->address,
        'full_name' => $faker->name,
        'national_identity_img' => $faker->imageUrl($width = 800, $height = 600),
        'commercial_register_img' => $faker->imageUrl($width = 800, $height = 600),
        'office_name' => $faker->name,
        'office_activity' => $faker->paragraph(3),
        'commercial_register_no' => $faker->numberBetween(1,10000),
        'youtube_video_link' => $faker->url,
        'facebook' => $faker->url,
        'twitter' =>  $faker->url,
        'youtube' =>  $faker->url,
        'instagram' =>  $faker->url,
        'whatsapp' =>  $faker->url,
        'snapchat' =>  $faker->url,
        'description' =>  $faker->paragraph(3),
        'lat' => $faker->latitude($min = -90, $max = 90),
        'lng' => $faker->longitude($min = -180, $max = 180),
        'mobile1' => $faker->e164PhoneNumber(),
        'mobile2' => $faker->e164PhoneNumber(),
        'telephone' => $faker->e164PhoneNumber(),
        'fax' => $faker->e164PhoneNumber(),
        'central' => $faker->e164PhoneNumber(),
        'email' => $faker->email,
        'website' => $faker->url,
    ];
});
