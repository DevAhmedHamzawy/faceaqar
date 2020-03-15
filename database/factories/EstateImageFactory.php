<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estate;
use App\EstateImage;
use Illuminate\Http\File;
use Faker\Generator as Faker;


$factory->define(EstateImage::class, function (Faker $faker) {
    static $i = 0;
    $estates = Estate::all()->pluck('id')->toArray();

   
    return [
        'estate_id' => $estates[$i++],
        'img' => json_encode(["Hydrangeas.jpg","Chrysanthemum.jpg","Koala.jpg","Desert.jpg","Lighthouse.jpg","Lighthouse.jpg"])
    ];
    

});
