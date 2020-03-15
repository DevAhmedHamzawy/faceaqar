<?php

namespace App\Traits\Estate;

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
        return DB::table('sort')->whereId($id)->pluck('name');
    }

    //Get All Offers
    public static function getAllOffers()
    {
        return DB::table('offer')->get();
    }

    //Get Specific Offer
    public static function getOffer($id)
    {
        return DB::table('offer')->whereId($id)->pluck('name');
    }

    //Get All Destinations
    public static function getAllDestinations()
    {
        return DB::table('destination')->get();
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
        $auctionEstate = self::whereEstateId($id)->first();
        return !empty($auctionEstate) ? $auctionEstate : '';
    }

    //Get Price Sort
    public static function getPriceSort($id)
    {
        return DB::table('price_sort')->whereId($id)->pluck('name');
    }

    //Get Payment Sort
    public static function getPaymentSort($id)
    {
        return DB::table('payment_sort')->whereId($id)->pluck('name');
    }

    //Get Main Area
    public static function getMainArea($id)
    {
        $area = Area::where('id', $id)->first();
        $mainArea = Area::where('id', $area->parent_id)->first();
        return $mainArea->name;
    }

}