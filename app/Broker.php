<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    protected $guarded = [];

    public static function getSlider()
    {
        //return self::whereBrokerAdSort('صور')->orWhere('broker_ad_sort', 'كروت إعلانية إلكترونية')->get();
    }

    public static function getTicker()
    {
        return self::get();
    }

    /*public function getImgPathAttribute()
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
    }*/


    public function images()
    {
        return $this->hasOne('App\BrokerImage', 'broker_id');
    }


    //Get Main Image Path
    public function getMainImgPathAttribute()
    {
        if(!empty($this->images)){
            $images = json_decode($this->images->img, true);
            if(file_exists(public_path() .'/storage/brokers/'. $this->id . '/' .$images[0]))
            {
                return url('storage/brokers/'. $this->id . '/' .$images[0]);
            }else{
                return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $this->id ) ) ) . "?d=identicon" . "&s=" . $size = 130;
            }
        }else{
            return null;
        }
    }

    public function textBroker()
    {
        return $this->hasOne('App\TextBroker');
    }

    public function imageBroker()
    {
        return $this->hasOne('App\ImageBroker');
    }

    public function adCardBroker()
    {
        return $this->hasOne('App\AdCardBroker');
    }

    public function adPageBroker()
    {
        return $this->hasOne('App\AdPageBroker');
    }


     // this is a recommended way to declare event handlers
     public static function boot() {
        parent::boot();

        static::deleting(function($broker) { 
            $broker->textBroker()->delete();
            $broker->imageBroker()->delete();
            $broker->adCardBroker()->delete();
            $broker->adPageBroker()->delete();
            $broker->images()->delete();
        });
    }



    
}
