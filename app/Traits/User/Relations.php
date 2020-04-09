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

    public function likes()
    {
        return $this->hasMany('App\Like', 'estate_id')->whereLike(1);
    }

    public function dislikes()
    {
        return $this->hasMany('App\Like', 'estate_id')->whereLike(-1);
    }

    public function reports()
    {
        return $this->hasMany('App\Report');
    }

    public function brokers()
    {
        return $this->hasMany('App\Broker');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }
}