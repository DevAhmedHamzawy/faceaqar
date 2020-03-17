<?php

namespace App\Traits\Estate;

use Carbon\Carbon;

Trait Attributes
{

    //Get created_at In Arabic With Format ('d M Y')
    public function getcreateAtAttribute()
    {
        return Carbon::parse($this->created_at)->translatedFormat('d M Y');
    }

    //Get updated_at In Arabic With Format ('d M Y')
    public function getUpdateAtAttribute()
    {
        return Carbon::parse($this->updated_at)->translatedFormat('d M Y');
    }

    //Get Time Ago Of created_at
    public function getAgoAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    //Check If User Added A Specific Estate To His Favourites
    public function getFavouriteAttribute()
    {
        if(!auth()->user()) { return false; }
        return auth()->user()->favourites()->whereEstateId($this->id)->exists();
    }

    //Get Main Image Path
    public function getMainImgPathAttribute()
    {
        if(!empty($this->images)){
            $images = json_decode($this->images->img);
            return url('storage/estates/'. $this->name . '/' .$images[0]);
        }else{
            return null;
        }
    }

}