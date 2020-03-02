<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $guarded = [];
    protected $with = ['estate', 'user'];

    public function estate()
    {
        return $this->belongsTo('App\Estate');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
