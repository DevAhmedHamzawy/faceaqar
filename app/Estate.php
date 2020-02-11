<?php

namespace App;

use App\Filters\BaseFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Estate extends Model
{
    protected $guarded = [];

    protected $with = ['category','images','likes','dislikes'];

    public function getRouteKeyName()
    {   
        // instead we should use slug
        return 'name';
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    public function localEstate()
    {
        return $this->hasOne('App\LocalEstate');
    }

    public function requestEstate()
    {
        return $this->hasOne('App\RequestEstate');
    }

    public function auctionEstate()
    {
        return $this->hasOne('App\AuctionEstate');
    }

    public function images()
    {
        return $this->hasOne('App\EstateImage', 'estate_id');
    }

    public function likes()
    {
        return $this->hasMany('App\Like', 'estate_id')->whereLike(1);
    }

    public function dislikes()
    {
        return $this->hasMany('App\Like', 'estate_id')->whereLike(-1);
    }

    

    public static function checkAdSort($adSort)
    {
        return DB::table('ad_sort')->whereName($adSort)->doesntExist() ? abort(404) : DB::table('ad_sort')->whereName($adSort)->first();
    }

    public static function getAllSorts()
    {
        return DB::table('sort')->get();
    }

    public static function getSort($id)
    {
        return DB::table('sort')->whereId($id)->pluck('name');
    }

    public static function getAllOffers()
    {
        return DB::table('offer')->get();
    }

    public static function getOffer($id)
    {
        return DB::table('sort')->whereId($id)->pluck('name');
    }

    public static function getAllDestinations()
    {
        return DB::table('destination')->get();
    }

    public static function getAllPriceSorts()
    {
        return DB::table('price_sort')->get();
    }

    public static function getAllPaymentSorts()
    {
        return DB::table('payment_sort')->get();
    }

    public static function getMainArea($id)
    {
        $area = Area::where('id', $id)->first();
        $mainArea = Area::where('id', $area->parent_id)->first();
        return $mainArea->name;
    }

    public static function scopeFilter(Builder $builder, $filters)
    {
        // old
        /*foreach($filters as $key => $value){
            $builder = $builder->where($key, $value);
        }

        return $builder;*/
        return (new BaseFilter(request()))->apply($builder, $filters);
    }


}
