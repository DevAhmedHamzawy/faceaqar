<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = [];

    protected $append = ['payment'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Get All Payment Details
    public function getPaymentAttribute()
    {
        return unserialize($this->payment_data);
    }

    public function getImgPathAttribute()
    {
        return "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $this->id ) ) ) . "?d=identicon" . "&s=" . $size = 130;
    }
}
