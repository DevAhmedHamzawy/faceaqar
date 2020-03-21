<?php

namespace App\Traits\User;

use Carbon\Carbon;

Trait Attributes
{

    //Get User Image
    public function getImgPathAttribute()
    {
        return url('storage/users/' . $this->img);
    }

    //Get Estate Office National Image
    public function getNationalImgPathAttribute()
    {
        return url('storage/users/' . $this->name . '/national_image/' . $this->profile->national_identity_img);
    }

    //Get Estate Office Commercial Image
    public function getCommercialImgPathAttribute()
    {
        return url('storage/users/' . $this->name . '/commercial_image/' . $this->profile->commercial_register_img);
    }

    //Get created_at In Arabic With Format ('d M Y')
    public function getcreateAtAttribute()
    {
        return Carbon::parse($this->profile->created_at)->translatedFormat('d M Y');
    }

    //Get updated_at In Arabic With Format ('d M Y')
    public function getUpdateAtAttribute()
    {
        return Carbon::parse($this->profile->updated_at)->translatedFormat('d M Y');
    }

    //Check If User Added A Specific Lawyer To His Favourites
    public function getFavouriteAttribute()
    {
        if(!auth()->user()) { return false; }
        return auth()->user()->favourites()->whereLawyerId($this->id)->exists();
    }

}