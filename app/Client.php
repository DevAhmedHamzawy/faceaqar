<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];
    protected $appends = ['img_path'];

    public function getImgPathAttribute()
    {
        return url('storage/clients/' . $this->img);
    }
}
