<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\UserImage;
use Faker\Generator as Faker;

$factory->define(UserImage::class, function (Faker $faker) {
    static $i = 0;
    $users = User::whereHas('roles', function ($query) {
        $query->where('name', '=', 'estate_office');
        $query->orWhere('name', '=', 'estate_agency');
        $query->orWhere('name', '=', 'estate_company');
        $query->orWhere('name', '=', 'estate_auction_office');
        $query->orWhere('name', '=', 'engineering_office');
    })->get()->pluck('id')->toArray();

    /*$users = User::whereHas('roles', function ($query) {
        $query->where('name', '=', 'middleware');
    })->get()->pluck('id')->toArray();*/
    
    if($i < 350){
        return [
            'user_id' => $users[$i++],
            'img' => json_encode(["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg"])
        ];
    }else{
        return [];
    }
});
