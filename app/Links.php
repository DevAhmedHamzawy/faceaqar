<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $guarded = [];
    protected $with = ['children'];

    public function children()
    {
        return $this->hasMany('App\Links', 'parent_id')->whereVisible(1)->orderBy('position');
    }

}
