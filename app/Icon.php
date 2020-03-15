<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    protected $guarded = [];
    protected $appends = ['icon_path'];

    public function getIconPathAttribute()
    {
        return url('storage/icons/' . $this->icon);
    }
}
