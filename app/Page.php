<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = [];
    protected $with = ['children'];

    public function children()
    {
        return $this->hasMany('App\Page', 'parent_id');
    }

    public static function getParents()
    {
        return self::whereNull('parent_id')->get();
    }

    public function getIconPathAttribute()
    {
        return url('storage/pages/' . $this->icon);
    }
}
