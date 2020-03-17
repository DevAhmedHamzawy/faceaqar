<?php

namespace App\Http\Controllers;

use App\Favourite;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
   
    public function store(Request $request)
    {
        if($request->has('estate_id')){
        return auth()->user()->favourites()->whereEstateId($request->estate_id)->exists() ? auth()->user()->favourites()->whereEstateId($request->estate_id)->delete() : auth()->user()->favourites()->create($request->all());
        }else{
        return auth()->user()->favourites()->whereLawyerId($request->lawyer_id)->exists() ? auth()->user()->favourites()->whereLawyerId($request->lawyer_id)->delete() : auth()->user()->favourites()->create($request->all());
        }
    }

}
