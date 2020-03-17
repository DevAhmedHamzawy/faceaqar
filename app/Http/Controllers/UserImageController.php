<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserImageController extends Controller
{
    public function destroy($index)
    {
        $userImages = json_decode(auth()->user()->images->img);
        unset($userImages[$index]);
        auth()->user()->images->img = json_encode($userImages);
        dd(auth()->user()->images->save());
    }
}
