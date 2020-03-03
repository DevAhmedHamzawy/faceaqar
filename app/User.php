<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

class User extends Authenticatable implements MustVerifyEmail, ViewableContract
{
    use Notifiable, EntrustUserTrait, Viewable;

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

    protected $with = ['profile','estates','images','favourites.estate'];


    public function getRouteKeyName()
    {
        return 'name';
    }

    public function roles()
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

    public function getcreateAtAttribute()
    {
        return Carbon::parse($this->created_at)->translatedFormat('d M Y');
    }

    public function getUpdateAtAttribute()
    {
        return Carbon::parse($this->profile->updated_at)->translatedFormat('d M Y');
    }

    public function getFavouriteAttribute()
    {
        if(!auth()->user()) { return false; }
        return auth()->user()->favourites()->whereLawyerId($this->id)->exists();
    }
}
