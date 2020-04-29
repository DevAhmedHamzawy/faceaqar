<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    protected $guarded = [];

    public static function getSlider()
    {
        return self::whereBrokerAdSort('صور')->orWhere('broker_ad_sort', 'كروت إعلانية إلكترونية')->get();
    }

    public static function getTicker()
    {
        return self::where('broker_ad_sort', '!=' , 'صور')->orWhere('broker_ad_sort', '!=' , 'كروت إعلانية إلكترونية')->get();
    }

    public function getImgPathAttribute()
    {
        if($this->broker_ad_sort == 'صور'){  
            if(file_exists(public_path() .'/storage/brokers/'. $this->file))
            {
                return url('storage/brokers/'. $this->file);
            }else{
                return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $this->id ) ) ) . "?d=identicon" . "&s=" . $size = 130;
            }
        }else{
            return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $this->id ) ) ) . "?d=identicon" . "&s=" . $size = 130;
        }
    }

    
}
