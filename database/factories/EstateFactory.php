<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Area;
use App\Category;
use App\Estate;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Estate::class, function (Faker $faker) {
    return [
        'code' => $faker->numberBetween(1,8000),
        'ad_sort_id' => function(){ return DB::table('ad_sort')->get()->random()->id; },
        'area_id' => function(){ return Area::whereNotNull('parent_id')->get()->random()->id; },
        'category_id' => function(){ return Category::all()->random()->id; },
        'sort_id' => function(){ return DB::table('sort')->get()->random()->id; },
        'offer_id' => function(){ return DB::table('offer')->get()->random()->id; },
        'premium_id' => function(){ return DB::table('premiums')->get()->random()->id; },
        'duration_id' => function(){ return DB::table('durations')->get()->random()->id; },
        'center' => $faker->city,
        'neighborhood' => $faker->cityPrefix,
        'street' => $faker->streetName,
        'address' => $faker->address,
        'name' => $faker->name,
        'youtube' => $faker->url,
        'description' => $faker->paragraph(3),
        'lat' => $faker->latitude($min = -90, $max = 90),
        'lng' => $faker->longitude($min = -180, $max = 180),
        'views' => $faker->numberBetween(1,3000),
    ];
});
