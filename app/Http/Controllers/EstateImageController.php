<?php

namespace App\Http\Controllers;

use App\Estate;
use App\EstateImage;
use Illuminate\Http\Request;

class EstateImageController extends Controller
{
    public function destroy(Estate $estate, $index)
    {
        $estateImages = json_decode($estate->images->img, true);
        $estateImages = array_values($estateImages);
        unset($estateImages[$index]);
        $estate->images->img = json_encode($estateImages);
        //$estate->images = $estateImages;
        dd($estate->images->save());
    }
}
