<?php

namespace App\Traits\Estate;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
            $images = json_decode($this->images->img, true);
            if(file_exists(public_path() .'/storage/estates/'. $this->name . '/' .$images[0]))
            {
                return url('storage/estates/'. $this->name . '/' .$images[0]);
            }else{
                //return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $this->id ) ) ) . "?d=identicon" . "&s=" . $size = 130;

                
                $images = [];

                for ($i=0 ; $i < 33 ; $i++ ) { 
                    array_push($images, $i.".jpg");
                }

                $number = rand(0,count($images)-1);
                return url('storage/estates/general' . '/' .$images[$number]);
            }
        }else{
            return null;
        }
    }

    public function getSortNameAttribute()
    {
        return DB::table('sort')->whereId($this->sort_id)->first()->name ?? '';
    }

    public function getOfferNameAttribute()
    {
        return DB::table('offer')->whereId($this->offer_id)->first()->name ?? '';
    }

}