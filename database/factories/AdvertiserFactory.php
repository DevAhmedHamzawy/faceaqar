<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Advertiser;
use App\Estate;
use Faker\Generator as Faker;

$factory->define(Advertiser::class, function (Faker $faker) {
    static $i = 0;
    $estates = Estate::all()->pluck('id')->toArray();

    if($i < 100){
        return [
            'estate_id' => $estates[$i++],
            'advertiser_sort_id' => function(){ return DB::table('roles')->get()->random()->id; },
            'name' => $faker->name,
            'mobile1' => $faker->e164PhoneNumber(),
            'mobile2' => $faker->e164PhoneNumber(),
            'telephone' => $faker->e164PhoneNumber(),
            'fax' => $faker->e164PhoneNumber(),
            'central' => $faker->e164PhoneNumber(),
            'email' => $faker->email,
            'website' => $faker->url,
        ];
    }else {
        return [];
    }
});
