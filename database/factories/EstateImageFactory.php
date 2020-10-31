<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estate;
use App\EstateImage;
use Illuminate\Http\File;
use Faker\Generator as Faker;


$factory->define(EstateImage::class, function (Faker $faker) {
    static $i = 0;
    $estates = Estate::all()->pluck('id')->toArray();

    if($i < 100){
        return [
            'estate_id' => $estates[$i++],
            'img' => json_encode(["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg"])
        ]; 
    }else{
        return [];
    }
    

});
