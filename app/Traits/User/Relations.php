<?php

namespace App\Traits\User;

Trait Relations
{
    public function userRoles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function images()
    {
        return $this->hasOne('App\UserImage', 'user_id');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function estates()
    {
        return $this->hasMany('App\Estate');
    }

    public function favourites()
    {
        return $this->hasMany('App\Favourite');
    }
}