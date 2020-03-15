<?php

namespace App\Traits\User;

Trait ChartsPanelsQueries
{

    //Count Users By Month
    public Static function FindUsersByMonth($monthNumber)
    {
        return Self::whereHas('roles', function ($query) {
            $query->whereName('owner')
            ->orWhere('name', 'middleware')
            ->orWhere('name', 'other');
        })->whereYear('created_at' , Carbon::now()->year)
        ->whereMonth('created_at' , $monthNumber)
        ->count();
    }

    //Count Users
    public static function CountUsers()
    {
        return Self::whereHas('roles', function ($query) {
            $query->whereName('owner')
            ->orWhere('name', 'middleware')
            ->orWhere('name', 'other');
        })->count();
    }

    //Count Estate Offices By Month
    public Static function FindOfficesByMonth($monthNumber)
    {
        return Self::whereHas('roles', function ($query) {
            $query->whereName('estate_office')
            ->orWhere('name', 'estate_agency')
            ->orWhere('name', 'estate_company')
            ->orWhere('name', 'estate_auction_office')
            ->orWhere('name', 'engineering_office');
        })
        ->whereYear('created_at' , Carbon::now()->year)
        ->whereMonth('created_at' , $monthNumber)
        ->count();
    }

    //Count Offices
    public static function CountOffices()
    {
        return Self::whereHas('roles', function ($query) {
            $query->whereName('estate_office')
            ->orWhere('name', 'estate_agency')
            ->orWhere('name', 'estate_company')
            ->orWhere('name', 'estate_auction_office')
            ->orWhere('name', 'engineering_office');
        })->count();
    }

    //Count Lawyers By Month
    public Static function FindLawyersByMonth($monthNumber)
    {
        return Self::whereHas('roles', function ($query) {
            $query->whereName('lawyer');
        })
        ->whereYear('created_at' , Carbon::now()->year)
        ->whereMonth('created_at' , $monthNumber)
        ->count();
    }

    //Count Lawyers
    public static function CountLawyers()
    {
        return Self::whereHas('roles', function ($query) {
            $query->whereName('lawyer');
        })->count();
    }

    //Get Top Five Users Added Estates
    public static function TopFiveUserEstates()
    {
        return self::withCount('estates')->take(5)->orderByDesc('estates_count')->get();
    }
}