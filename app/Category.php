<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];


    public static function getVisibleCategories()
    {
        return self::where('visible', 1)->get();
    }
}
