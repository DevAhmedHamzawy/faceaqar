<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $with = ['profile','estates','favourites.estate'];


    public function getRouteKeyName()
    {
        return 'name';
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
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

    public function getImgPathAttribute()
    {
        return url('storage/users/' . $this->img);
    }

    public function getNationalImgPathAttribute()
    {
        return url('storage/users/' . $this->name . '/national_image/' . $this->profile->national_identity_img);
    }

    public function getCommercialImgPathAttribute()
    {
        return url('storage/users/' . $this->name . '/commercial_image/' . $this->profile->commercial_register_img);
    }
}
