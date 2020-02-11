<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $guarded = [];
    protected $appends = ['img_path'];

    public function getImgPathAttribute()
    {
        return url('storage/portfolios/' . $this->img);
    }
}
