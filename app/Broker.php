<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public static function getSlider()
    {
        return self::whereBrokerAdSort('صور')->orWhere('broker_ad_sort', 'كروت إعلانية إلكترونية')->get();
    }

    public static function getTicker()
    {
        return self::where('broker_ad_sort', '!=' , 'صور')->orWhere('broker_ad_sort', '!=' , 'كروت إعلانية إلكترونية')->get();
    }
}
