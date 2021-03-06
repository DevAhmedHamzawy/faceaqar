<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];


    public static function getVisibleCategories()
    {
        return self::whereVisible(1)->get();
    }
}
