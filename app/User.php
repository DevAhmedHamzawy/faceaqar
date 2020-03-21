<?php

namespace App;

use App\Traits\User\Attributes;
use App\Traits\User\ChartsPanelsQueries;
use App\Traits\User\Relations;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

class User extends Authenticatable implements MustVerifyEmail, ViewableContract
{
    use Notifiable, EntrustUserTrait, Viewable, Relations, Attributes, ChartsPanelsQueries;

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

    protected $with = ['profile','estates','images','favourites.estate','likes','dislikes'];


    public function getRouteKeyName()
    {
        return 'name';
    }
}
