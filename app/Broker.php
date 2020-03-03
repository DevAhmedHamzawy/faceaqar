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
}
