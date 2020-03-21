<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        if($request->has('estate_id')){
            return auth()->user() ?  Like::updateOrCreate(['user_id' => auth()->user()->id, 'estate_id' => $request->estate_id], ['like' => '1']) :  'الرجاء من فضلك تسجيل الدخول أو الإنضمام للموقع';
        }else{
            return auth()->user() ?  Like::updateOrCreate(['user_id' => auth()->user()->id, 'office_id' => $request->office_id], ['like' => '1']) :  'الرجاء من فضلك تسجيل الدخول أو الإنضمام للموقع';
        }
    }

    public function dislike(Request $request)
    {
        if($request->has('estate_id')){
            return auth()->user() ?  Like::updateOrCreate(['user_id' => auth()->user()->id, 'estate_id' => $request->estate_id], ['like' => '-1']) :  'الرجاء من فضلك تسجيل الدخول أو الإنضمام للموقع';
        }else{
            return auth()->user() ?  Like::updateOrCreate(['user_id' => auth()->user()->id, 'office_id' => $request->office_id], ['like' => '-1']) :  'الرجاء من فضلك تسجيل الدخول أو الإنضمام للموقع';
        }
    }

    public function check(Request $request)
    {
        if($request->has('estate_id')){
            return auth()->user() ? Like::whereUserId(auth()->user()->id)->whereEstateId($request->estate_id)->first() : 'الرجاء من فضلك تسجيل الدخول أو الإنضمام للموقع';
        }else{
            return auth()->user() ? Like::whereUserId(auth()->user()->id)->whereOfficeId($request->office_id)->first() : 'الرجاء من فضلك تسجيل الدخول أو الإنضمام للموقع';
        }
    }
}