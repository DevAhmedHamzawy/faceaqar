<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    protected $guarded = [];

    public static function checkAdvertiser($estate)
    {
        return $this->where('estate_id',$estate->id)->firstOrFail();
    }
}
