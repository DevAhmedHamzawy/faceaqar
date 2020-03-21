<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Advertiser extends Model
{
    protected $guarded = [];

    public static function checkAdvertiser($estate)
    {
        return $this->where('estate_id',$estate->id)->firstOrFail();
    }

    public static function getRole($id)
    {
        return DB::table('roles')->whereId($id)->first()->display_name;
    }
}
