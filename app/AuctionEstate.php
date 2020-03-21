<?php

namespace App;

use Alkoumi\LaravelHijriDate\Hijri;
use Carbon\Carbon;

class AuctionEstate extends Estate
{
    //Get Day From Date
    public function getdayAttribute()
    {
        return Carbon::parse($this->date)->translatedFormat('l');
    }

    //Get Hijri Date 
    public function gethijriDateAttribute()
    {
        return Hijri::DateMediumFormat($this->date);
    }

    //Get DateModified In Arabic With Format ('d M Y')
    public function getdateModifiedAttribute()
    {
        return Carbon::parse($this->date)->translatedFormat('d M Y');
    }

    //Get TimeModified In Arabic With Format ('g:i A')
    public function gettimeModifiedAttribute()
    {
        return Carbon::parse($this->time)->translatedFormat('g:i A');
    }


}
