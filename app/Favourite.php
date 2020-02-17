<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $guarded = [];

    public function estate()
    {
        return $this->belongsTo('App\Estate');
    }
}
