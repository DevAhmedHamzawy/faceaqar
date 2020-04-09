<?php

namespace App\Traits\Estate;

Trait Relations
{
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    public function localEstate()
    {
        return $this->hasOne('App\LocalEstate');
    }

    public function requestEstate()
    {
        return $this->hasOne('App\RequestEstate','estate_id');
    }

    public function auctionEstate()
    {
        return $this->hasOne('App\AuctionEstate');
    }

    public function images()
    {
        return $this->hasOne('App\EstateImage', 'estate_id');
    }

    public function likes()
    {
        return $this->hasMany('App\Like', 'estate_id')->whereLike(1);
    }

    public function dislikes()
    {
        return $this->hasMany('App\Like', 'estate_id')->whereLike(-1);
    }

    public function favourites()
    {
        return $this->hasMany('App\Favourite', 'estate_id');
    }

    public function reports()
    {
        return $this->hasMany('App\Report');
    }

    public function advertiser()
    {
        return $this->hasOne('App\Advertiser');
    }
}