<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        return auth()->user() ?  Like::updateOrCreate(['user_id' => auth()->user()->id, 'estate_id' => $request->estate_id], ['like' => '1']) :  'الرجاء من فضلك تسجيل الدخول أو الإنضمام للموقع';
    }

    public function dislike(Request $request)
    {
        return auth()->user() ?  Like::updateOrCreate(['user_id' => auth()->user()->id, 'estate_id' => $request->estate_id], ['like' => '-1']) :  'الرجاء من فضلك تسجيل الدخول أو الإنضمام للموقع';
    }
}