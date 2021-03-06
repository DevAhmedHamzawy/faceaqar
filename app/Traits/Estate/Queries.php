<?php

namespace App\Traits\Estate;

use App\Area;
use Illuminate\Support\Facades\DB;

Trait Queries
{
    
    //Check Ad Sort First Then Get It
    public static function checkAdSort($adSort)
    {
        return DB::table('ad_sort')->whereName($adSort)->orWhere('id', $adSort)->doesntExist() ? abort(404) : DB::table('ad_sort')->whereName($adSort)->orWhere('id', $adSort)->first();
    }

    //Get All Sorts
    public static function getAllSorts()
    {
        return DB::table('sort')->get();
    }

    //Get Specific Sort
    public static function getSort($id)
    {
        return DB::table('sort')->whereId($id)->first()->name ?? 'لا يوجد';
    }

    //Get All Offers
    public static function getAllOffers()
    {
        return DB::table('offer')->get();
    }

    //Get Specific Offer
    public static function getOffer($id)
    {
        return DB::table('offer')->whereId($id)->first()->name ?? 'لا يوجد';
    }

    //Get All Destinations
    public static function getAllDestinations()
    {
        return DB::table('destination')->get();
    }

    //Get Specific Destination
    public static function getDestination($id)
    {
         return DB::table('destination')->whereId($id)->first()->name ?? 'لا يوجد';
    }

    //Get Specific Premium
    public static function getPremium($id)
    {
        return DB::table('premiums')->whereId($id)->first() ?? 'لا يوجد';
    }

    //Get Specific Duration
    public static function getDuration($id)
    {
        return DB::table('durations')->whereId($id)->first() ?? 'لا يوجد';
    }
 

    //Get All Price Sorts
    public static function getAllPriceSorts()
    {
        return DB::table('price_sort')->get();
    }

    //Get All Payment Sorts
    public static function getAllPaymentSorts()
    {
        return DB::table('payment_sort')->get();
    }

    //Get Local Estate Or Auction Estate Data
    public static function getData($id)
    {
        $localauctionEstate = self::whereEstateId($id)->first();
        return !empty($localauctionEstate) ? $localauctionEstate : '';
    }

    //Get Price Sort
    public static function getPriceSort($id)
    {
        return DB::table('price_sort')->whereId($id)->first()->name ?? '';
    }

    //Get Payment Sort
    public static function getPaymentSort($id)
    {
        return DB::table('payment_sort')->whereId($id)->first()->name ?? '';
    }

    //Get Main Area
    public static function getMainArea($id)
    {
        $area = Area::where('id', $id)->first();
        $mainArea = Area::where('id', $area->parent_id)->first();
        return $mainArea->name;
    }

}