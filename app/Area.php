<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $guarded = [];
    protected $with = ['children'];

    public function getRouteKeyName()
    {
        return 'name';
    }

    public static function getMainAreas()
    {
        return self::whereParentId(1)->get();
    }

    public function children()
    {
        return $this->hasMany('App\Area', 'parent_id')->whereNotNull('parent_id');
    }
}
