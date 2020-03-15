<?php

namespace App\Traits\Estate;

Trait ChartsQueries
{

    //Get Number Of Estates By Month And Estate Ad Sort
    public static function FindByMonth($monthNumber, $adSortId)
    {
        return Self::whereAdSortId($adSortId)->whereYear('created_at' , Carbon::now()->year)->whereMonth('created_at' , $monthNumber)->count();
    }

    //Count Premium Estates
    public static function CountPremiums()
    {
        $premiums = DB::table('premiums')->pluck('id','name');
        $countPremiums = [];

        foreach($premiums as $key => $value)
        {
           $countPremiums[$key] = [];
           $countPremiums[$key] = Self::wherePremiumId($value)->count();
        }

        return $countPremiums;
    }

    //Count Estate Ad Durations
    public static function CountDurations()
    {
        $durations = DB::table('durations')->pluck('id','name');
        $countDurations = [];

        foreach($durations as $key => $value)
        {
           $countDurations[$key] = [];
           $countDurations[$key] = Self::whereDurationId($value)->count();
        }

        return $countDurations;
    }

    //Count Offers
    public static function CountOffers()
    {
        $offers = DB::table('offer')->pluck('id','name');
        $countOffers = [];

        foreach($offers as $key => $value)
        {
           $countOffers[$key] = [];
           $countOffers[$key] = Self::whereOfferId($value)->count();
        }

        return $countOffers;
    }

    //Count Sorts
    public static function CountSorts()
    {
        $sorts = DB::table('sort')->pluck('id','name');
        $countSorts = [];

        foreach($sorts as $key => $value)
        {
           $countSorts[$key] = [];
           $countSorts[$key] = Self::whereSortId($value)->count();
        }

        return $countSorts;
    }

    //Count Ad Sorts
    public static function CountAdSorts()
    {
        $adsorts = DB::table('ad_sort')->pluck('id','name');
        $countAdSorts = [];

        foreach($adsorts as $key => $value)
        {
           $countAdSorts[$key] = [];
           $countAdSorts[$key] = Self::whereAdSortId($value)->count();
        }

        return $countAdSorts;
    }

    //Count Categories
    public static function CountCategories()
    {
        $categories = DB::table('categories')->pluck('id','name');
        $countCategories = [];

        foreach($categories as $key => $value)
        {
           $countCategories[$key] = [];
           $countCategories[$key] = Self::whereCategoryId($value)->count();
        }

        return $countCategories;
    }

}
    