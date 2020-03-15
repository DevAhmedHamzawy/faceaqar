<?php

namespace App;

use Alkoumi\LaravelHijriDate\Hijri;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $guarded = [];

    public function getLastUpdateHijriAttribute()
    {
        return Hijri::DateMediumFormat($this->updated_at);
    }

    public function getLastUpdateAttribute()
    {
        return Carbon::parse($this->updated_at)->translatedFormat('d M Y');
    }
}
