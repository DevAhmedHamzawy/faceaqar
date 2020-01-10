<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AuctionEstate extends Estate
{
    public static function getData($id)
    {
        $auctionEstate = self::whereEstateId($id)->first();
        return !empty($auctionEstate) ? $auctionEstate : '';
    }

    public static function getPriceSort($id)
    {
        return DB::table('price_sort')->whereId($id)->pluck('name');
    }

    public static function getPaymentSort($id)
    {
        return DB::table('payment_sort')->whereId($id)->pluck('name');
    }
}
